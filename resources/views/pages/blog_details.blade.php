@extends('layouts.main')

@section('title', ($blog['title'] ?? 'Blog') . ' | Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')

@section('content')

    {{-- BREADCRUMB --}}
    <section class="site-breadcrumb" style="background: url('{{ asset('assets/images/contact-bg.jpg') }}');">
        <div class="container">
            <h2 class="breadcrumb-title">
                {{ $blog['title'] ?? '' }}
            </h2>

            <ul class="breadcrumb-menu">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li>
                    <a href="{{ route('blogs') }}">Blogs</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li class="active">
                    {{ $blog['title'] ?? '' }}
                </li>
            </ul>
        </div>
    </section>

    {{-- BLOG DETAILS --}}
    <section class="blog-details py-120">
        <div class="container">
            <div class="row justify-content-center">

                {{-- MAIN CONTENT --}}
                <div class="col-lg-8">

                    {{-- FEATURE IMAGE --}}
                    <div class="blog-details-image mb-4 position-relative">
                        <img
                            src="{{ $blog['big_image_url'] ?? asset('assets/images/01.jpg') }}"
                            class="img-fluid w-100 rounded-4 shadow"
                            alt="{{ $blog['title'] ?? 'Blog Image' }}"
                        >
                    </div>

                    {{-- META INFO --}}
                    <div class="blog-meta d-flex flex-wrap align-items-center gap-3 mb-3 text-muted">
                        <span>
                            <i class="fa fa-calendar text-danger"></i>
                            {{ isset($blog['publish_from']) ? \Carbon\Carbon::parse($blog['publish_from'])->format('d M Y') : '' }}
                        </span>
                        <span>
                            <i class="fa fa-user text-danger"></i>
                            Admin
                        </span>
                    </div>

                    {{-- TITLE --}}
                    <h1 class="blog-details-title fw-bold mb-4">
                        {{ $blog['title'] ?? '' }}
                    </h1>

                    {{-- CONTENT --}}
                    <div class="blog-details-content">
                        {!! $blog['content'] ?? '' !!}
                    </div>

                    {{-- DIVIDER --}}
                    <hr class="my-5">

                    {{-- BACK BUTTON --}}
                    <div class="text-center">
                        <a href="{{ route('blogs') }}" class="btn btn-outline-danger px-4">
                            <i class="fa fa-arrow-left"></i> Back to Blogs
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection
