@extends('layouts.main')

@section('title', 'Blogs | Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')

@section('content')

    <section class="site-breadcrumb" style="background: url('{{ asset('assets/images/contact-bg.jpg') }}');">
        <div class="container">
            <h2 class="breadcrumb-title">blogs</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </li>
                <li class="active">blogs</li>
            </ul>
        </div>
    </section>

    <section class="feature-area ft-bg1  py-120">
        <div class="container">
            <div class="row">

                @forelse($blogs as $blog)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="blog-card h-100">

                            {{-- IMAGE --}}
                            <div class="blog-image">
                                <img src="{{ $blog->small_image ? asset('storage/' . $blog->small_image) : asset('assets/images/01.jpg') }}"
                                    alt="{{ $blog->title }}">

                                <span class="blog-date">
                                    <i class="fa fa-calendar"></i>
                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}
                                </span>
                            </div>

                            {{-- CONTENT --}}
                            <div class="blog-content">
                                <h4 class="blog-title">
                                    {{ $blog->title }}
                                </h4>

                                <p class="blog-excerpt">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 95) }}
                                </p>

                                <a href="{{ route('blogs.show', $blog->slug) }}" class="read-more-btn">
                                    Read More <i class="fa fa-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No blogs available.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </section>

    <style>
        .blog-card {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            transition: all 0.35s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .blog-image {
            position: relative;
            overflow: hidden;
        }

        .blog-image img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .blog-card:hover .blog-image img {
            transform: scale(1.08);
        }

        /* DATE BADGE */
        .blog-date {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #e50914;
            color: #fff;
            padding: 6px 12px;
            font-size: 13px;
            border-radius: 30px;
            font-weight: 500;
        }

        /* CONTENT */
        .blog-content {
            padding: 22px;
        }

        .blog-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #111;
        }

        .blog-excerpt {
            font-size: 15px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 18px;
        }

        /* READ MORE BUTTON */
        .read-more-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #e50914;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .read-more-btn i {
            transition: transform 0.3s ease;
        }

        .read-more-btn:hover {
            color: #000;
        }

        .read-more-btn:hover i {
            transform: translateX(6px);
        }
    </style>

@endsection
