<?php

namespace App\Support;

class UaePhoneNumber
{
    public static function normalize(?string $phone): ?string
    {
        if (! $phone) {
            return null;
        }

        $phone = preg_replace('/\D+/', '', $phone);

        if (str_starts_with($phone, '971')) {
            $phone = substr($phone, 3);
        }

        if (strlen($phone) > 9 && str_starts_with($phone, '0')) {
            $phone = substr($phone, 1);
        }

        return $phone;
    }

    public static function isValidMobile(?string $phone): bool
    {
        return (bool) preg_match('/^5\d{8}$/', $phone ?? '');
    }
}
