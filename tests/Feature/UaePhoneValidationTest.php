<?php

namespace Tests\Feature;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class UaePhoneValidationTest extends TestCase
{
    public function test_contact_form_requires_a_valid_uae_mobile_number(): void
    {
        $response = $this->from('/contact')->post('/contact-us', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '412345678',
            'subject' => 'Need help',
            'message' => 'Please call me back.',
        ]);

        $response->assertRedirect('/contact');
        $response->assertSessionHasErrors('phone');
    }

    public function test_contact_form_normalizes_the_phone_before_sending_to_the_api(): void
    {
        config()->set('services.api.base_url', 'https://example.com/api');

        Http::fake([
            'https://example.com/api/v1/common/contact-us' => Http::response(['status' => true], 200),
        ]);

        $response = $this->from('/contact')->post('/contact-us', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '+971 52 300 3423',
            'subject' => 'Need help',
            'message' => 'Please call me back.',
        ]);

        $response->assertRedirect('/contact');
        $response->assertSessionHasNoErrors();
        $response->assertSessionHas('success');

        Http::assertSent(function (Request $request) {
            return $request->url() === 'https://example.com/api/v1/common/contact-us'
                && $request['phone'] === '526917666';
        });
    }

    public function test_login_otp_rejects_an_invalid_uae_mobile_number(): void
    {
        $response = $this->postJson('/login-otp', [
            'phone' => '412345678',
        ]);

        $response->assertStatus(422);
        $response->assertJson([
            'status' => false,
            'message' => 'Enter a valid UAE mobile number (9 digits starting with 5).',
        ]);
    }

    public function test_login_otp_normalizes_the_phone_before_calling_the_api(): void
    {
        config()->set('services.api.base_url', 'https://example.com/api');

        Http::fake([
            'https://example.com/api/v1/customer/login' => Http::response([
                'status' => true,
                'data' => [],
            ], 200),
        ]);

        $response = $this->postJson('/login-otp', [
            'phone' => '0526917666',
        ]);

        $response->assertOk();
        $response->assertJsonPath('data.phone', '526917666');

        Http::assertSent(function (Request $request) {
            return $request->url() === 'https://example.com/api/v1/customer/login'
                && $request['phone'] === '526917666'
                && $request['country_code'] === '+971';
        });
    }
}
