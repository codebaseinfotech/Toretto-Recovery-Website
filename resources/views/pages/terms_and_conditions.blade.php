@extends('layouts.main')

@section('title', 'Terms & Conditions | Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')

@section('meta_description', 'Terms and Conditions for Toretto Recovery. Learn the terms and conditions of using our vehicle recovery services in Dubai and across the UAE.')

@section('content')

    {{-- SITE BREADCRUMB SECTION --}}
    <section class="site-breadcrumb" style="background: url('{{ asset('assets/images/contact-bg.jpg') }}');">
        <div class="container">
            <h2 class="breadcrumb-title">Terms & Conditions</h2>
            <ul class="breadcrumb-menu">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </li>
                <li class="active">Terms & Conditions</li>
            </ul>
        </div>
    </section>

{{-- CONTENT SECTION --}}
<section class="contact-area" style="padding: 60px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="policy-wrap"
                     style="background:#fff;border-radius:16px;box-shadow:0 10px 30px rgba(0,0,0,.06);overflow:hidden;">

                    {{-- Header --}}
                    <div class="policy-head"
                         style="padding:22px 26px;border-bottom:1px solid #eee;
                                display:flex;align-items:center;
                                justify-content:space-between;gap:12px;flex-wrap:wrap;">

                        <div>
                            <h3 style="margin:0;font-weight:800;">
                                {{ $title ?? 'Privacy Policy' }}
                            </h3>

                            <div style="color:#6c757d;font-size:14px;margin-top:6px;">
                                @if(!empty($effective_date))
                                    Effective Date:
                                    {{ \Carbon\Carbon::parse($effective_date)->format('d M, Y') }}
                                @else
                                    Effective Date:
                                    {{ now()->format('d M, Y') }}
                                @endif
                            </div>
                        </div>

                        <div style="background:#f8f9fa;border:1px solid #eee;
                                    padding:10px 14px;border-radius:999px;
                                    font-size:13px;color:#333;
                                    display:flex;align-items:center;gap:8px;">
                            <i class="fa fa-lock"></i>
                            Your data is protected
                        </div>
                    </div>

                    {{-- Body --}}
                    <div class="policy-body" style="padding:26px;">

                        @if(!empty($content))
                            <div class="policy-content" style="line-height:1.9;color:#333;">
                                {!! $content !!}
                            </div>
                        @else
                            <div class="alert alert-warning" style="border-radius:12px;">
                                Privacy Policy content is currently unavailable.
                            </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
