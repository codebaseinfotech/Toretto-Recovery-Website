@extends('layouts.main')

@section('title', 'AREAS WE SERVE | Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')

@section('content')

    <section class="site-breadcrumb" style="background: url('{{ asset('assets/images/contact-bg.jpg') }}');">
        <div class="container">
            <h2 class="breadcrumb-title">AREAS WE SERVE</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </li>
                <li class="active">Areas We Serve</li>
            </ul>
        </div>
    </section>

    <section class="coming-soon">
        <div class="coming-content">
            <h1>🚧 Coming Soon</h1>
            <p>
                We’re working hard to bring you something amazing.<br>
                Our service will be live very soon!
            </p>

            <div class="countdown">
                <div>
                    <span>00</span>
                    <small>Days</small>
                </div>
                <div>
                    <span>00</span>
                    <small>Hours</small>
                </div>
                <div>
                    <span>00</span>
                    <small>Minutes</small>
                </div>
                <div>
                    <span>00</span>
                    <small>Seconds</small>
                </div>
            </div>

            <a href="{{ url('/') }}" class="back-btn">
                ← Back to Home
            </a>
        </div>
    </section>
    <style>
        .coming-soon {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            padding: 20px;
        }

        .coming-content {
            max-width: 700px;
            animation: fadeUp 1s ease-in-out;
        }

        .coming-content h1 {
            font-size: 52px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .coming-content p {
            font-size: 18px;
            opacity: 0.9;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .countdown div {
            background: rgba(255, 255, 255, 0.15);
            padding: 15px 20px;
            border-radius: 12px;
            min-width: 100px;
        }

        .countdown span {
            display: block;
            font-size: 32px;
            font-weight: bold;
        }

        .countdown small {
            font-size: 14px;
            opacity: 0.8;
        }

        .back-btn {
            display: inline-block;
            padding: 12px 30px;
            background: #ff9800;
            color: #000;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .back-btn:hover {
            background: #ffc107;
            transform: translateY(-2px);
        }

        /* Animation */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Mobile */
        @media (max-width: 576px) {
            .coming-content h1 {
                font-size: 36px;
            }
        }
    </style>
@endsection
