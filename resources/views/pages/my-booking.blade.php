@extends('layouts.main')

@section('title', 'My Bookings | Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')

@section('meta_description', 'Manage your car recovery and towing service bookings with Toretto Recovery. Track your 24/7 emergency roadside assistance requests across Dubai and the UAE.')

@push('head')
<style>
    .mybooking-section {
        position: relative;
        padding: 56px 0 86px;
        background:
            radial-gradient(circle at 12% 10%, rgba(215, 0, 6, 0.40), transparent 20%),
            radial-gradient(circle at 84% 18%, rgba(255, 92, 92, 0.22), transparent 24%),
            radial-gradient(circle at 50% 100%, rgba(17, 24, 39, 0.88), transparent 44%),
            linear-gradient(180deg, #0f172a 0%, #111827 34%, #1b0f10 100%);
        overflow: hidden;
    }

    .mybooking-section::before,
    .mybooking-section::after {
        content: '';
        position: absolute;
        border-radius: 999px;
        filter: blur(8px);
        pointer-events: none;
    }

    .mybooking-section::before {
        width: 420px;
        height: 420px;
        left: -180px;
        top: -40px;
        background: rgba(215, 0, 6, 0.28);
    }

    .mybooking-section::after {
        width: 460px;
        height: 460px;
        right: -190px;
        bottom: -140px;
        background: rgba(255, 48, 48, 0.12);
    }

    .mybooking-container {
        width: min(100%, 1920px);
        padding-left: 8px;
        padding-right: 8px;
        margin: 0 auto;
    }

    .mybooking-shell {
        position: relative;
        z-index: 1;
        background: rgba(255, 255, 255, 0.98);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 30px;
        box-shadow:
            0 28px 80px rgba(215, 0, 6, 0.12),
            0 22px 60px rgba(17, 24, 39, 0.08);
        padding: 24px;
        overflow: hidden;
    }

    .booking-hero {
        display: grid;
        grid-template-columns: minmax(0, 1.6fr) minmax(0, 0.86fr);
        gap: 16px;
        margin-bottom: 18px;
    }

    .booking-stats {
        display: grid;
        gap: 12px;
    }

    .booking-hero__main {
        position: relative;
        isolation: isolate;
        overflow: hidden;
        background:
            radial-gradient(circle at 85% 24%, rgba(255, 255, 255, 0.20), transparent 20%),
            radial-gradient(circle at 72% 28%, rgba(255, 72, 72, 0.18), transparent 26%),
            linear-gradient(135deg, #0f172a 0%, #1f2937 34%, #d70006 100%);
        color: #fff;
        border-radius: 24px;
        padding: 28px 28px 26px;
        min-height: 234px;
        border: 1px solid rgba(255, 255, 255, 0.10);
        box-shadow: 0 18px 42px rgba(215, 0, 6, 0.22);
    }

    .booking-hero__main::before {
        content: '';
        position: absolute;
        inset: 14px 14px auto auto;
        width: 180px;
        height: 180px;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.18), transparent 65%);
        border-radius: 50%;
        z-index: -1;
    }

    .booking-hero__main::after {
        content: '';
        position: absolute;
        inset: auto auto -90px -90px;
        width: 260px;
        height: 260px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 50%;
        z-index: -1;
    }

    .booking-hero__kicker {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 7px 12px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.12);
        color: rgba(255, 255, 255, 0.92);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        margin-bottom: 14px;
    }

    .booking-hero__main h2 {
        color: #fff;
        margin: 0 0 10px;
        font-size: clamp(34px, 4vw, 56px);
        font-weight: 900;
        letter-spacing: -0.03em;
    }

    .booking-hero__main p {
        margin: 0;
        color: rgba(255, 255, 255, 0.96);
        font-size: 15px;
        line-height: 1.7;
        max-width: 60ch;
    }

    .booking-hero__main .booking-customer {
        color: rgba(255, 255, 255, 0.96);
    }

    .booking-hero__main .booking-customer span {
        background: rgba(255, 255, 255, 0.16);
        color: #fff;
        border: 1px solid rgba(255, 255, 255, 0.20);
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.10);
    }

    .booking-hero__main .booking-customer i,
    .booking-hero__main .booking-customer strong {
        color: #fff;
    }

    .booking-hero__summary {
        display: grid;
        gap: 12px;
    }

    .booking-stat {
        position: relative;
        overflow: hidden;
        background: linear-gradient(180deg, rgba(255,255,255,0.98), rgba(249,250,252,0.98));
        border: 1px solid rgba(17, 24, 39, 0.08);
        border-radius: 22px;
        padding: 18px 18px 16px 18px;
        box-shadow: 0 16px 35px rgba(215, 0, 6, 0.05);
    }

    .booking-stat::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 5px;
        background: linear-gradient(180deg, #d70006, #ff6b6b);
    }

    .booking-stat strong {
        display: block;
        font-size: 27px;
        color: #0f172a;
        letter-spacing: -0.03em;
        line-height: 1.1;
    }

    .booking-stat span {
        display: block;
        margin-top: 6px;
        color: #667085;
        font-size: 13px;
        line-height: 1.45;
    }

    .booking-toolbar {
        display: flex;
        justify-content: space-between;
        gap: 12px;
        flex-wrap: wrap;
        align-items: center;
        margin: 18px 0 18px;
        padding: 14px 16px;
        background: linear-gradient(180deg, rgba(255,255,255,0.98), rgba(255,250,250,0.98));
        border: 1px solid rgba(17, 24, 39, 0.06);
        border-radius: 22px;
    }

    .booking-tabs {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .booking-tab {
        border: 1px solid rgba(17, 24, 39, 0.10);
        background: #fff;
        color: #111827;
        border-radius: 999px;
        padding: 12px 18px;
        font-weight: 800;
        letter-spacing: 0.01em;
        box-shadow: 0 10px 24px rgba(17, 24, 39, 0.05);
        transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease, color 0.2s ease;
    }

    .booking-tab:hover {
        transform: translateY(-1px);
        box-shadow: 0 14px 28px rgba(17, 24, 39, 0.08);
    }

    .booking-tab.active {
        background: linear-gradient(135deg, #111827, #222);
        color: #fff;
        border-color: #111827;
    }

    .filter {
        background: #fff;
        border: 1px solid rgba(17, 24, 39, 0.10);
        border-radius: 14px;
        padding: 11px 14px;
        min-width: 170px;
        cursor: pointer;
        font-weight: 800;
        position: relative;
        box-shadow: 0 10px 24px rgba(17, 24, 39, 0.05);
    }

    .filter-dropdown {
        display: none;
        position: absolute;
        right: 0;
        top: calc(100% + 8px);
        background: #fff;
        border: 1px solid rgba(17, 24, 39, 0.10);
        border-radius: 16px;
        box-shadow: 0 18px 45px rgba(17, 24, 39, 0.14);
        list-style: none;
        margin: 0;
        padding: 8px;
        min-width: 190px;
        z-index: 10;
    }

    .filter-dropdown li {
        padding: 10px 12px;
        border-radius: 12px;
        cursor: pointer;
        font-weight: 700;
        color: #111827;
    }

    .filter-dropdown li:hover {
        background: #fff1f1;
        color: #d70006;
    }

    .booking-panel {
        display: none;
        animation: fadeUp 0.24s ease;
    }

    .booking-panel.active {
        display: block;
    }

    .booking-grid {
        display: grid;
        gap: 16px;
    }

    .booking-table-wrap {
        overflow-x: auto;
        border: 1px solid rgba(17, 24, 39, 0.08);
        border-radius: 22px;
        background: rgba(255, 255, 255, 0.98);
        box-shadow: 0 18px 42px rgba(15, 23, 42, 0.05);
    }

    .booking-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 980px;
    }

    .booking-table thead th {
        text-align: left;
        padding: 14px 16px;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: #64748b;
        background: linear-gradient(180deg, #f8fafc, #ffffff);
        border-bottom: 1px solid rgba(17, 24, 39, 0.08);
        white-space: nowrap;
    }

    .booking-table tbody td {
        padding: 14px 16px;
        vertical-align: top;
        border-bottom: 1px solid rgba(17, 24, 39, 0.06);
        color: #0f172a;
        font-size: 13px;
    }

    .booking-table tbody tr:hover {
        background: #fff7f7;
    }

    .booking-table__title {
        display: block;
        font-weight: 900;
        color: #0f172a;
        margin-bottom: 4px;
    }

    .booking-table__sub {
        display: block;
        color: #64748b;
        line-height: 1.45;
    }

    .booking-table__meta {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        margin-top: 8px;
    }

    .booking-table__actions {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .booking-table__chip {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        white-space: nowrap;
        border-radius: 999px;
        padding: 6px 10px;
        font-size: 11px;
        font-weight: 900;
        line-height: 1;
    }

    .booking-table__chip--route {
        background: rgba(17, 24, 39, 0.06);
        color: #334155;
    }

    .booking-card {
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(15, 23, 42, 0.08);
        border-radius: 26px;
        background:
            linear-gradient(180deg, rgba(255,255,255,0.98), rgba(247,248,251,0.98)),
            #fff;
        box-shadow: 0 18px 42px rgba(15, 23, 42, 0.07);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .booking-card::before {
        content: '';
        position: absolute;
        inset: 0 auto 0 0;
        width: 6px;
        background: linear-gradient(180deg, #d70006, #7f1d1d);
        opacity: 0.9;
    }

    .booking-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 22px 55px rgba(17, 24, 39, 0.10);
    }

    .booking-card--active::before { background: linear-gradient(180deg, #2563eb, #22c55e); }
    .booking-card--completed::before { background: linear-gradient(180deg, #111827, #6b7280); }
    .booking-card--cancelled::before { background: linear-gradient(180deg, #d70006, #fb7185); }

    .booking-card__header {
        display: flex;
        justify-content: space-between;
        gap: 12px;
        padding: 18px 20px 16px;
        background:
            linear-gradient(180deg, rgba(255, 255, 255, 0.98), rgba(247, 249, 252, 0.98)),
            #fff;
        border-bottom: 1px solid rgba(17, 24, 39, 0.06);
    }

    .booking-card__brand {
        display: flex;
        gap: 14px;
        align-items: flex-start;
    }

    .booking-card__logo {
        width: 58px;
        height: 58px;
        border-radius: 20px;
        padding: 10px;
        background: linear-gradient(180deg, #ffffff, #f4f7fb);
        border: 1px solid rgba(17, 24, 39, 0.08);
        box-shadow: 0 14px 28px rgba(17, 24, 39, 0.08);
        object-fit: contain;
        flex-shrink: 0;
    }

    .booking-card__headline {
        min-width: 0;
    }

    .booking-id {
        margin: 0;
        font-size: 12px;
        color: #64748b;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .booking-id span {
        display: block;
        color: #0f172a;
        font-size: 21px;
        margin-top: 5px;
        text-transform: none;
        letter-spacing: -0.02em;
    }

    .booking-label {
        margin-top: 6px;
        font-size: 14px;
        color: #0f172a;
        font-weight: 700;
        max-width: 58ch;
    }

    .booking-customer {
        display: flex;
        flex-wrap: wrap;
        gap: 8px 10px;
        margin-top: 10px;
        color: #475569;
        font-size: 12px;
        font-weight: 700;
    }

    .booking-customer span {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 7px 11px;
        border-radius: 999px;
        background: rgba(15, 23, 42, 0.05);
    }

    .badge-soft {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
        white-space: nowrap;
        border-radius: 999px;
        padding: 6px 10px;
        font-size: 11px;
        font-weight: 900;
        letter-spacing: 0.02em;
    }

    .badge-status { background: rgba(17, 24, 39, 0.95); color: #fff; }
    .badge-paid { background: #e8fff4; color: #0f7a44; }
    .badge-partial { background: #fff7ed; color: #c2410c; }
    .badge-today { background: #eef2ff; color: #4338ca; }

    .booking-card__status-group {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
        align-items: flex-start;
        gap: 8px;
        max-width: 240px;
    }

    .booking-card__body {
        padding: 18px 20px;
        display: grid;
        gap: 14px;
    }

    .booking-route-item {
        display: flex;
        gap: 12px;
        align-items: flex-start;
    }

    .booking-route-item img {
        width: 46px;
        height: 46px;
        object-fit: contain;
        flex-shrink: 0;
        background: rgba(17, 24, 39, 0.04);
        border-radius: 14px;
        padding: 7px;
    }

    .booking-route-item strong {
        display: block;
        color: #111827;
        font-size: 15px;
    }

    .booking-route-item span {
        display: block;
        margin-top: 5px;
        color: #6b7280;
        font-size: 13px;
        line-height: 1.55;
    }

    .booking-payment {
        background:
            linear-gradient(180deg, rgba(255, 244, 244, 0.96), rgba(255,255,255,0.98)),
            #fff;
        border: 1px solid rgba(215, 0, 6, 0.08);
        border-radius: 18px;
        padding: 16px;
    }

    .booking-payment__grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 10px;
    }

    .booking-payment__tile {
        background: #fff;
        border: 1px solid rgba(17, 24, 39, 0.08);
        border-radius: 14px;
        padding: 12px;
        box-shadow: 0 10px 20px rgba(17, 24, 39, 0.04);
    }

    .booking-payment__tile span {
        display: block;
        font-size: 11px;
        color: #6b7280;
        text-transform: uppercase;
        letter-spacing: 0.06em;
        margin-bottom: 6px;
    }

    .booking-payment__tile strong {
        display: block;
        color: #111827;
        font-size: 14px;
    }

    .booking-card__footer {
        display: flex;
        justify-content: space-between;
        gap: 12px;
        flex-wrap: wrap;
        padding: 0 20px 20px;
        align-items: center;
    }

    .booking-card__footer .badge-soft {
        min-height: 28px;
    }

    .booking-actions {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .booking-btn {
        border: 0;
        border-radius: 14px;
        padding: 11px 16px;
        font-weight: 800;
        transition: transform 0.2s ease, box-shadow 0.2s ease, opacity 0.2s ease;
    }

    .booking-btn:hover {
        transform: translateY(-1px);
        opacity: 0.98;
    }

    .booking-btn--primary {
        background: linear-gradient(135deg, #111827, #222);
        color: #fff;
        box-shadow: 0 12px 24px rgba(17, 24, 39, 0.16);
    }

    .booking-btn--ghost {
        background: #fff;
        color: #111827;
        border: 1px solid rgba(17, 24, 39, 0.12);
    }

    .booking-detail-popup {
        border-radius: 26px !important;
        padding: 0 !important;
        width: min(760px, calc(100vw - 24px)) !important;
    }

    .booking-detail-popup .swal2-title {
        padding-top: 22px;
        color: #111827;
        font-weight: 900;
        letter-spacing: -0.03em;
    }

    .booking-detail-popup .swal2-html-container {
        margin: 0 !important;
        padding: 0 22px 22px !important;
    }

    .booking-detail-shell {
        display: grid;
        gap: 16px;
        background: linear-gradient(180deg, #ffffff, #fafafa);
        border-radius: 22px;
        padding: 18px;
        border: 1px solid rgba(17, 24, 39, 0.08);
    }

    .booking-detail-hero {
        display: flex;
        gap: 14px;
        align-items: center;
        padding: 16px;
        border-radius: 20px;
        background: linear-gradient(135deg, rgba(17, 24, 39, 0.96), rgba(215, 0, 6, 0.94));
        color: #fff;
        overflow: hidden;
        position: relative;
    }

    .booking-detail-hero::after {
        content: '';
        position: absolute;
        right: -36px;
        top: -36px;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.12);
    }

    .booking-detail-brand {
        width: 74px;
        height: 74px;
        padding: 12px;
        border-radius: 22px;
        background: rgba(255, 255, 255, 0.96);
        flex-shrink: 0;
        box-shadow: 0 18px 32px rgba(17, 24, 39, 0.16);
    }

    .booking-detail-brand img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .booking-detail-topline {
        min-width: 0;
    }

    .booking-detail-eyebrow {
        display: inline-flex;
        padding: 6px 10px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.12);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 8px;
    }

    .booking-detail-topline h3 {
        margin: 0;
        font-size: 28px;
        line-height: 1.1;
        font-weight: 900;
        letter-spacing: -0.03em;
    }

    .booking-detail-topline p {
        margin: 8px 0 0;
        opacity: 0.85;
    }

    .booking-detail-meta {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px;
    }

    .booking-detail-meta__item,
    .booking-detail-route {
        background: #fff;
        border: 1px solid rgba(17, 24, 39, 0.08);
        border-radius: 18px;
        padding: 14px;
        box-shadow: 0 10px 24px rgba(17, 24, 39, 0.05);
    }

    .booking-detail-meta__item span,
    .booking-detail-route span {
        display: block;
        color: #6b7280;
        text-transform: uppercase;
        letter-spacing: 0.06em;
        font-size: 11px;
        font-weight: 800;
        margin-bottom: 8px;
    }

    .booking-detail-meta__item strong,
    .booking-detail-route strong {
        display: block;
        color: #111827;
        font-size: 15px;
        line-height: 1.45;
    }

    .booking-loading,
    .booking-empty,
    .booking-alert {
        border: 1px dashed rgba(17, 24, 39, 0.12);
        border-radius: 20px;
        padding: 22px;
        text-align: center;
        background: rgba(255, 255, 255, 0.8);
    }

    .booking-empty h3,
    .booking-alert strong {
        color: #111827;
        font-weight: 900;
        letter-spacing: -0.02em;
    }

    .booking-empty p,
    .booking-alert div {
        color: #6b7280;
    }

    .booking-skeleton {
        border-radius: 20px;
        min-height: 140px;
        background: linear-gradient(90deg, #eef2f7 25%, #e5e7eb 37%, #eef2f7 63%);
        background-size: 400% 100%;
        animation: shimmer 1.2s ease-in-out infinite;
        margin-bottom: 12px;
    }

    .booking-loading .booking-skeleton:last-child {
        margin-bottom: 0;
    }

    @keyframes shimmer {
        0% { background-position: 100% 0; }
        100% { background-position: 0 0; }
    }

    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(8px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 991px) {
        .booking-hero {
            grid-template-columns: 1fr;
        }

        .booking-detail-meta,
        .booking-payment__grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 767px) {
        .mybooking-section {
            padding: 58px 0 80px;
        }

        .mybooking-container {
            padding-left: 6px;
            padding-right: 6px;
        }

        .mybooking-shell {
            padding: 18px;
            border-radius: 24px;
        }

        .booking-hero,
        .booking-detail-meta,
        .booking-payment__grid {
            grid-template-columns: 1fr;
        }

        .booking-toolbar {
            padding: 12px;
        }

        .booking-card__header,
        .booking-card__footer {
            flex-direction: column;
            align-items: flex-start;
        }

        .booking-card__brand {
            width: 100%;
        }

        .booking-card__header,
        .booking-card__body,
        .booking-card__footer {
            padding-left: 18px;
            padding-right: 18px;
        }
    }
</style>
@endpush

@section('content')
<section class="mybooking-section">
    <div class="container-fluid mybooking-container">
        <div class="mybooking-shell">
            <div class="booking-hero">
                <div class="booking-hero__main">
                    <div class="booking-hero__kicker">Live booking history</div>
                    <h2>My Bookings</h2>
                    <p>Track active recovery trips, review payment progress, and open booking details whenever you need them.</p>
                    <div class="booking-customer" style="margin-top:16px;">
                        <span><i class="fa-solid fa-user"></i> <strong id="summaryCustomerName">Customer</strong></span>
                        <span><i class="fa-solid fa-phone"></i> <strong id="summaryCustomerPhone">N/A</strong></span>
                    </div>
                </div>
                <div class="booking-stats">
                    <div class="booking-stat"><strong id="summaryTotal">0</strong><span>Total trips</span></div>
                    <div class="booking-stat"><strong id="summaryToday">0</strong><span>Current trips</span></div>
                    <div class="booking-stat"><strong id="summaryRemaining">AED 0.00</strong><span>Remaining balance</span></div>
                </div>
            </div>

            <div class="booking-alert d-none" id="bookingAuthAlert">
                <strong>Login required</strong>
                <div class="mt-1">Please log in to view your booking history and payment summary.</div>
                <div class="mt-3"><a href="{{ route('login') }}" class="booking-btn booking-btn--primary text-decoration-none">Login</a></div>
            </div>

            <div class="booking-toolbar">
                <div class="booking-tabs">
                    <button class="booking-tab active" data-tab="active" type="button">Active Bookings</button>
                    <button class="booking-tab" data-tab="completed" type="button">Completed</button>
                    <button class="booking-tab" data-tab="cancelled" type="button">Cancelled</button>
                </div>
                <div class="position-relative">
                    <div class="filter" id="filterBtn">All Dates <i class="fa-solid fa-chevron-down"></i></div>
                    <ul class="filter-dropdown" id="filterDropdown">
                        <li data-value="all">All Dates</li>
                        <li data-value="today">Today</li>
                        <li data-value="week">This Week</li>
                        <li data-value="month">This Month</li>
                        <li data-value="year">This Year</li>
                    </ul>
                </div>
            </div>

            <div class="booking-loading" id="bookingLoadingState">
                <div class="booking-skeleton"></div>
                <div class="booking-skeleton"></div>
                <div class="booking-skeleton"></div>
            </div>

            <div class="booking-empty d-none" id="bookingEmptyState">
                <h3 class="h4 mb-2">No bookings yet</h3>
                <p class="mb-0">Your active, completed, and cancelled trips will appear here once they are created.</p>
            </div>

            <div class="booking-panel active" id="active"><div class="booking-grid" id="bookingGrid-active"></div></div>
            <div class="booking-panel" id="completed"><div class="booking-grid" id="bookingGrid-completed"></div></div>
            <div class="booking-panel" id="cancelled"><div class="booking-grid" id="bookingGrid-cancelled"></div></div>
        </div>
    </div>
</section>
@endsection

@push('my-booking-script')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const PRICE_API_BASE_URL = "{{ config('services.api.base_url') }}";
    const BOOKINGS_SUMMARY = `${PRICE_API_BASE_URL}/v1/customer/bookings-summary`;
    const state = { bookings: [], bookingsByTab: { active: [], completed: [], cancelled: [] }, customer: null, summary: null, tab: 'active', date: 'all' };
    const els = {
        filterBtn: document.getElementById('filterBtn'),
        filterDropdown: document.getElementById('filterDropdown'),
        loading: document.getElementById('bookingLoadingState'),
        empty: document.getElementById('bookingEmptyState'),
        auth: document.getElementById('bookingAuthAlert'),
        total: document.getElementById('summaryTotal'),
        today: document.getElementById('summaryToday'),
        remaining: document.getElementById('summaryRemaining'),
        customerName: document.getElementById('summaryCustomerName'),
        customerPhone: document.getElementById('summaryCustomerPhone')
    };

    const getToken = () => (localStorage.getItem('auth_token') || document.querySelector('meta[name="api-token"]')?.content || '').trim();
    const txt = (v) => v === null || v === undefined ? '' : String(v).trim();
    const esc = (v) => txt(v).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#039;');
    const amt = (v, c = 'AED') => `${c} ${Number.isFinite(Number(v)) ? Number(v).toFixed(2) : '0.00'}`;
    const num = (v) => { const n = parseFloat(txt(v).replace(/[^0-9.-]/g, '')); return Number.isFinite(n) ? n : 0; };

    const apiFetch = async (url, options = {}) => {
        const token = getToken();
        const headers = { Accept: 'application/json', ...(options.body ? { 'Content-Type': 'application/json' } : {}), ...(token ? { Authorization: `Bearer ${token}` } : {}) };
        const resp = await window.ApiUtils.fetch(url, { method: options.method || 'GET', headers, ...(options.body ? { body: options.body } : {}) });
        const raw = await resp.text();
        try { return { resp, json: JSON.parse(raw) }; } catch (e) { return { resp, json: { raw } }; }
    };

    const dateVal = (b) => b?.created_at || b?.booking_date || b?.scheduled_at || b?.trip_date || b?.date || null;
    const isToday = (v) => v && !Number.isNaN(new Date(v).getTime()) && new Date(v).toDateString() === new Date().toDateString();
    const isWeek = (v) => { if (!v) return false; const d = new Date(v); if (Number.isNaN(d.getTime())) return false; const n = new Date(); const s = new Date(n); s.setDate(n.getDate() - n.getDay()); s.setHours(0,0,0,0); const e = new Date(s); e.setDate(s.getDate() + 7); return d >= s && d < e; };
    const isMonth = (v) => { if (!v) return false; const d = new Date(v); return !Number.isNaN(d.getTime()) && d.getFullYear() === new Date().getFullYear() && d.getMonth() === new Date().getMonth(); };
    const isYear = (v) => { if (!v) return false; const d = new Date(v); return !Number.isNaN(d.getTime()) && d.getFullYear() === new Date().getFullYear(); };
    const fmtDate = (v) => { if (!v) return 'N/A'; const d = new Date(v); return Number.isNaN(d.getTime()) ? txt(v) : new Intl.DateTimeFormat('en-GB', { day:'2-digit', month:'short', year:'numeric', hour:'2-digit', minute:'2-digit' }).format(d); };
    const ident = (b) => b?.booking_code || b?.booking_number || b?.reference_number || b?.reference || b?.code || b?.id || b?.booking_id || 'N/A';
    const title = (b) => b?.service_type_name || b?.service_type || b?.service_name || b?.service_type?.name || b?.title || 'Recovery Booking';
    const route = (b) => {
        const p = txt(b?.pickup_address || b?.pickup_location || b?.from || '');
        const d = txt(b?.dropoff_address || b?.drop_location || b?.to || '');
        return p && d ? `${p} -> ${d}` : p || d || 'Route not available';
    };
    const statusMeta = (b) => { const s = txt(b?.status || b?.booking_status || b?.state || b?.trip_status).toLowerCase(); if (s.includes('cancel')) return { key:'cancelled', label:'Cancelled' }; if (s.includes('complete') || s.includes('done') || s.includes('closed')) return { key:'completed', label:'Completed' }; return { key:'active', label: s ? s.replace(/[_-]+/g,' ').replace(/\b\w/g, c => c.toUpperCase()) : 'Active' }; };
    const ps = (b) => {
        const s = b?.payment_summary || {};
        const latest = s?.latest_payment || b?.latest_payment || null;
        const paymentStatus = txt(s?.payment_status ?? b?.payment_status).toLowerCase();
        return {
            booking_total_amount: s?.booking_total_amount ?? b?.booking_total_amount ?? b?.total_amount ?? null,
            total_paid_amount: s?.total_paid_amount ?? b?.total_paid_amount ?? b?.paid_amount ?? null,
            remaining_amount: s?.remaining_amount ?? b?.remaining_amount ?? null,
            currency: s?.currency ?? b?.currency ?? (state.summary && state.summary.currency) ?? 'AED',
            payment_status: s?.payment_status ?? b?.payment_status ?? 'unpaid',
            is_paid: typeof s?.is_paid === 'boolean' ? s.is_paid : paymentStatus === 'paid' || paymentStatus === 'succeeded' || paymentStatus === 'success',
            is_partial_paid: typeof s?.is_partial_paid === 'boolean' ? s.is_partial_paid : paymentStatus === 'partial',
            can_pay_more: typeof s?.can_pay_more === 'boolean' ? s.can_pay_more : num(s?.remaining_amount ?? b?.remaining_amount ?? 0) > 0,
            latest_payment: latest
        };
    };
    const paymentMeta = (s) => { const st = txt(s?.payment_status).toLowerCase(); if (s?.is_paid || st === 'paid' || st === 'succeeded' || st === 'success') return { label:'Paid', cls:'badge-paid' }; if (s?.is_partial_paid || st === 'partial') return { label:'Partial Paid', cls:'badge-partial' }; return { label: st ? st.replace(/[_-]+/g,' ').replace(/\b\w/g, c => c.toUpperCase()) : 'Unpaid', cls:'badge-status' }; };
    const detailId = (b) => b?.id || b?.booking_id || b?.bookingId || b?.uuid || b?.reference || ident(b);
    const summaryCustomer = () => state.customer || {};
    const customerName = (b) => b?.customer_name ||
        b?.customer?.name ||
        b?.customer?.full_name ||
        summaryCustomer()?.name ||
        summaryCustomer()?.full_name ||
        summaryCustomer()?.customer_name ||
        b?.user?.name ||
        b?.name ||
        b?.client_name ||
        'Customer';
    const customerPhone = (b) => b?.customer_phone ||
        b?.customer?.phone ||
        b?.customer?.mobile ||
        summaryCustomer()?.phone ||
        summaryCustomer()?.mobile ||
        b?.phone ||
        b?.mobile ||
        '';
    const customerEmail = (b) => b?.customer_email ||
        b?.customer?.email ||
        summaryCustomer()?.email ||
        b?.email ||
        '';
    const customerInitials = (name) => {
        const parts = txt(name).split(/\s+/).filter(Boolean);
        if (!parts.length) return 'TR';
        return parts.slice(0, 2).map((part) => part[0]).join('').toUpperCase().slice(0, 2);
    };
    const findBooking = (id) => state.bookings.find((b) => txt(detailId(b)) === txt(id));
    const bookingSummaryText = (b) => {
        const parts = [
            txt(b?.pickup_address || b?.pickup_location || b?.from || ''),
            txt(b?.dropoff_address || b?.drop_location || b?.to || '')
        ].filter(Boolean);
        return parts.length ? parts.join(' -> ') : 'Route not available';
    };

    const parseSummary = (payload) => {
        const d = payload?.data ?? payload ?? {};
        const current = Array.isArray(d?.current_trips) ? d.current_trips : [];
        const completed = Array.isArray(d?.completed_trips) ? d.completed_trips : [];
        const cancelled = Array.isArray(d?.cancelled_trips) ? d.cancelled_trips : [];
        return {
            customer: d?.customer || null,
            summary: d?.summary || null,
            bookingsByTab: { active: current, completed, cancelled },
            bookings: [...current, ...completed, ...cancelled]
        };
    };

    const renderStats = () => {
        const summary = state.summary || {};
        const totalCount = Number.isFinite(Number(summary.total_trip_count)) ? Number(summary.total_trip_count) : state.bookings.length;
        const activeCount = Number.isFinite(Number(summary.current_trip_count)) ? Number(summary.current_trip_count) : state.bookingsByTab.active.length;
        const remaining = summary.total_remaining_amount ?? state.bookings.reduce((sum, b) => sum + num(b?.remaining_amount ?? ps(b)?.remaining_amount), 0);
        els.total.textContent = String(totalCount);
        els.today.textContent = String(activeCount);
        els.remaining.textContent = amt(remaining, summary.currency || 'AED');
        if (els.customerName) els.customerName.textContent = customerName(state.customer || {});
        if (els.customerPhone) els.customerPhone.textContent = customerPhone(state.customer || {}) || 'N/A';
    };

    const summaryBox = (b) => {
        const s = ps(b);
        if (!(s?.booking_total_amount || s?.total_paid_amount || s?.remaining_amount)) return '';
        const meta = paymentMeta(s);
        return `
            <div class="booking-payment">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
                    <strong>Payment Summary</strong>
                    <span class="badge-soft ${meta.cls}">${esc(meta.label)}</span>
                </div>
                <div class="booking-payment__grid">
                    <div class="booking-payment__tile"><span>Booking Total</span><strong>${esc(amt(s.booking_total_amount, s.currency || 'AED'))}</strong></div>
                    <div class="booking-payment__tile"><span>Total Paid</span><strong>${esc(amt(s.total_paid_amount, s.currency || 'AED'))}</strong></div>
                    <div class="booking-payment__tile"><span>Remaining</span><strong>${esc(amt(s.remaining_amount, s.currency || 'AED'))}</strong></div>
                    <div class="booking-payment__tile"><span>Can Pay More</span><strong>${s.can_pay_more ? 'Yes' : 'No'}</strong></div>
                </div>
                ${s.latest_payment ? `
                    <div class="booking-payment__tile mt-3">
                        <span>Latest Payment</span>
                        <strong>${esc(txt(s.latest_payment.status || 'N/A').replace(/[_-]+/g, ' '))}</strong>
                        <div class="mt-1 small text-muted">
                            ${s.latest_payment.payment_method ? `Method: ${esc(s.latest_payment.payment_method)} ` : ''}
                            ${s.latest_payment.gateway ? `| Gateway: ${esc(s.latest_payment.gateway)} ` : ''}
                            ${s.latest_payment.amount ? `| Amount: ${esc(amt(s.latest_payment.amount, s.latest_payment.currency || 'AED'))}` : ''}
                        </div>
                    </div>` : ''}
            </div>`;
    };

    const cardHtml = (b) => {
        const s = ps(b);
        const sm = paymentMeta(s);
        const bm = statusMeta(b);
        const d = dateVal(b);
        const todayBadge = isToday(d) ? '<span class="badge-soft badge-today">Today</span>' : '';
        const partialBadge = s?.is_partial_paid ? '<span class="badge-soft badge-partial">Partial Paid</span>' : '';
        const paidBadge = s?.is_paid ? '<span class="badge-soft badge-paid">Paid</span>' : '';
        return `
            <article class="booking-card booking-card--${esc(bm.key)}">
                <div class="booking-card__header">
                    <div class="booking-card__brand">
                        <img class="booking-card__logo" src="{{ asset('assets/images/logo (1).png') }}" alt="Toretto Recovery">
                        <div class="booking-card__headline">
                            <p class="booking-id">Booking ID <span>#${esc(ident(b))}</span></p>
                            <div class="booking-label">${esc(title(b))}</div>
                            <div class="booking-customer">
                                <span><i class="fa-solid fa-user"></i> ${esc(customerName(b))}</span>
                                ${customerPhone(b) ? `<span><i class="fa-solid fa-phone"></i> ${esc(customerPhone(b))}</span>` : ''}
                                ${customerEmail(b) ? `<span><i class="fa-solid fa-envelope"></i> ${esc(customerEmail(b))}</span>` : ''}
                            </div>
                        </div>
                    </div>
                    <div class="booking-card__status-group">
                        <span class="badge-soft badge-status">${esc(bm.label)}</span>
                        ${paidBadge}${partialBadge}${todayBadge}
                    </div>
                </div>
                <div class="booking-card__body">
                    <div class="booking-route-item">
                        <img src="{{ asset('assets/images/towing-service.png') }}" alt="">
                        <div><strong>Trip Route</strong><span><i class="fa-solid fa-location-dot"></i> ${esc(route(b))}</span></div>
                    </div>
                    <div class="booking-route-item">
                        <img src="{{ asset('assets/images/calender.png') }}" alt="">
                        <div><strong>${esc(fmtDate(d))}</strong><span>Created at / scheduled time</span></div>
                    </div>
                    ${summaryBox(b)}
                </div>
                <div class="booking-card__footer">
                    <div class="small text-muted">${bookingSummaryText(b)}${s?.is_partial_paid ? ' | This booking is partially paid and still has a remaining balance.' : ''}</div>
                    <div class="booking-actions">
                        <button class="booking-btn booking-btn--ghost js-details" type="button" data-id="${esc(detailId(b))}">View Details</button>
                    </div>
                </div>
            </article>`;
    };

    const tableRowHtml = (b) => {
        const s = ps(b);
        const sm = paymentMeta(s);
        const bm = statusMeta(b);
        const d = dateVal(b);
        const paidChip = s?.is_paid ? '<span class="booking-table__chip" style="background:#e8fff4;color:#0f7a44;">Paid</span>' : '';
        const partialChip = s?.is_partial_paid ? '<span class="booking-table__chip" style="background:#fff7ed;color:#c2410c;">Partial Paid</span>' : '';
        const todayChip = isToday(d) ? '<span class="booking-table__chip" style="background:#eef2ff;color:#4338ca;">Today</span>' : '';
        return `
            <tr>
                <td>
                    <span class="booking-table__title">#${esc(ident(b))}</span>
                    <span class="booking-table__sub">${esc(title(b))}</span>
                    <div class="booking-table__meta">
                        <span class="booking-table__chip booking-table__chip--route">${esc(customerName(b))}</span>
                    </div>
                </td>
                <td>
                    <span class="booking-table__sub">${esc(route(b))}</span>
                </td>
                <td>
                    <span class="booking-table__sub">${esc(fmtDate(d))}</span>
                </td>
                <td>
                    <span class="booking-table__title">${esc(amt(s.total_paid_amount ?? s.booking_total_amount, s.currency || 'AED'))}</span>
                    <span class="booking-table__sub">Remaining: ${esc(amt(s.remaining_amount, s.currency || 'AED'))}</span>
                </td>
                <td>
                    <span class="booking-table__chip ${sm.cls}">${esc(sm.label)}</span>
                    <div class="booking-table__meta" style="margin-top:8px;">
                        <span class="booking-table__chip" style="background:#0f172a;color:#fff;">${esc(bm.label)}</span>
                        ${paidChip}${partialChip}${todayChip}
                    </div>
                </td>
                <td>
                    <div class="booking-table__actions">
                        <button class="booking-btn booking-btn--ghost js-details" type="button" data-id="${esc(detailId(b))}">View Details</button>
                    </div>
                </td>
            </tr>`;
    };

    const tableHtml = (items, kind) => `
        <div class="booking-table-wrap">
            <table class="booking-table">
                <thead>
                    <tr>
                        <th>Booking</th>
                        <th>Route</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ${items.length ? items.map(tableRowHtml).join('') : `<tr><td colspan="6"><div class="booking-empty" style="margin:0;border:0;background:transparent;padding:18px 0;"><h3 class="h5 mb-2">No ${esc(kind)} bookings found</h3><div class="text-muted">Try a different date filter or check back later.</div></div></td></tr>`}
                </tbody>
            </table>
        </div>`;

    const render = () => {
        const grids = {
            active: document.getElementById('bookingGrid-active'),
            completed: document.getElementById('bookingGrid-completed'),
            cancelled: document.getElementById('bookingGrid-cancelled')
        };
        Object.values(grids).forEach((g) => g && (g.innerHTML = ''));

        if (!state.bookings.length) {
            els.empty.classList.remove('d-none');
            return;
        }

        const source = state.bookingsByTab[state.tab] || [];
        const filtered = source.filter((b) => {
            const dv = dateVal(b);
            return state.date === 'all' || (state.date === 'today' && isToday(dv)) || (state.date === 'week' && isWeek(dv)) || (state.date === 'month' && isMonth(dv)) || (state.date === 'year' && isYear(dv));
        });

        Object.entries(grids).forEach(([k, grid]) => {
            if (!grid) return;
            const items = k === state.tab ? filtered : [];
            if (!items.length) {
                grid.innerHTML = `<div class="booking-empty"><h3 class="h5 mb-2">No ${esc(k)} bookings found</h3><div class="text-muted">Try a different date filter or check back later.</div></div>`;
                return;
            }
            grid.innerHTML = k === 'active' ? items.map(cardHtml).join('') : tableHtml(items, k);
        });

        els.empty.classList.toggle('d-none', state.bookings.length !== 0);
    };

    const openDetails = (id) => {
        if (!getToken()) return;
        const detail = findBooking(id);
        if (!detail) {
            if (typeof showToast === 'function') showToast('Booking detail not found in the loaded summary.', 'error');
            else alert('Booking detail not found in the loaded summary.');
            return;
        }

        const s = ps(detail);
        const sm = paymentMeta(s);
        const bm = statusMeta(detail);
        const latest = s.latest_payment || {};

        Swal.fire({
            title: 'Booking Details',
            html: `
                <div class="booking-detail-shell text-start">
                    <div class="booking-detail-hero">
                        <div class="booking-detail-brand">
                            <img src="{{ asset('assets/images/logo (1).png') }}" alt="Toretto Recovery">
                        </div>
                        <div class="booking-detail-topline">
                            <span class="booking-detail-eyebrow">Booking overview</span>
                            <h3>${esc(title(detail))}</h3>
                            <p>${esc(customerName(detail))}</p>
                        </div>
                    </div>

                    <div class="booking-detail-meta">
                        <div class="booking-detail-meta__item">
                            <span>Customer</span>
                            <strong>${esc(customerName(detail))}</strong>
                            ${customerPhone(detail) ? `<div>${esc(customerPhone(detail))}</div>` : ''}
                            ${customerEmail(detail) ? `<div>${esc(customerEmail(detail))}</div>` : ''}
                        </div>
                        <div class="booking-detail-meta__item">
                            <span>Status</span>
                            <strong>${esc(bm.label)}</strong>
                            <div>${esc(fmtDate(dateVal(detail)))}</div>
                        </div>
                    </div>

                    <div class="booking-payment">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
                            <strong>Payment Summary</strong>
                            <span class="badge-soft ${sm.cls}">${esc(sm.label)}</span>
                        </div>
                        <div class="booking-payment__grid">
                            <div class="booking-payment__tile"><span>Total</span><strong>${esc(amt(s.booking_total_amount, s.currency || 'AED'))}</strong></div>
                            <div class="booking-payment__tile"><span>Paid</span><strong>${esc(amt(s.total_paid_amount, s.currency || 'AED'))}</strong></div>
                            <div class="booking-payment__tile"><span>Remaining</span><strong>${esc(amt(s.remaining_amount, s.currency || 'AED'))}</strong></div>
                            <div class="booking-payment__tile"><span>Can Pay More</span><strong>${s.can_pay_more ? 'Yes' : 'No'}</strong></div>
                        </div>
                        ${latest && Object.keys(latest).length ? `
                            <div class="booking-payment__tile mt-3">
                                <span>Latest Payment</span>
                                <strong>${esc(txt(latest.status || 'N/A').replace(/[_-]+/g, ' '))}</strong>
                                <div class="mt-1 small text-muted">${latest.payment_method ? `Method: ${esc(latest.payment_method)} ` : ''}${latest.gateway ? `| Gateway: ${esc(latest.gateway)} ` : ''}${latest.amount ? `| Amount: ${esc(amt(latest.amount, latest.currency || 'AED'))}` : ''}</div>
                            </div>` : ''}
                    </div>

                    <div class="booking-detail-route">
                        <span>Trip route</span>
                        <strong>${esc(route(detail))}</strong>
                    </div>
                </div>
            `,
            showConfirmButton: true,
            confirmButtonText: 'Close',
            customClass: {
                confirmButton: 'booking-btn booking-btn--primary',
                popup: 'booking-detail-popup'
            }
        });
    };

    const load = async () => {
        if (!getToken()) {
            els.loading.classList.add('d-none');
            els.auth.classList.remove('d-none');
            return;
        }
        try {
            const { resp, json } = await apiFetch(BOOKINGS_SUMMARY);
            const parsed = resp.ok && json.status !== false ? parseSummary(json) : parseSummary({});
            state.customer = parsed.customer;
            state.summary = parsed.summary;
            state.bookingsByTab = parsed.bookingsByTab;
            state.bookings = parsed.bookings;
            renderStats();
            render();
        } catch (e) {
            console.error('[My Booking]', e);
            if (typeof showToast === 'function') showToast('Unable to load booking history right now.', 'error');
        } finally {
            els.loading.classList.add('d-none');
        }
    };

    document.querySelectorAll('.booking-tab').forEach((btn) => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.booking-tab').forEach((b) => b.classList.remove('active'));
            btn.classList.add('active');
            state.tab = btn.dataset.tab;
            document.querySelectorAll('.booking-panel').forEach((p) => p.classList.remove('active'));
            document.getElementById(state.tab)?.classList.add('active');
            render();
        });
    });

    if (els.filterBtn && els.filterDropdown) {
        els.filterBtn.addEventListener('click', () => {
            els.filterDropdown.style.display = els.filterDropdown.style.display === 'block' ? 'none' : 'block';
        });
        els.filterDropdown.querySelectorAll('li').forEach((item) => {
            item.addEventListener('click', () => {
                state.date = item.dataset.value || 'all';
                els.filterBtn.innerHTML = `${esc(item.textContent)} <i class="fa-solid fa-chevron-down"></i>`;
                els.filterDropdown.style.display = 'none';
                render();
            });
        });
        document.addEventListener('click', (e) => {
            if (!els.filterBtn.contains(e.target) && !els.filterDropdown.contains(e.target)) els.filterDropdown.style.display = 'none';
        });
    }

    document.addEventListener('click', (e) => {
        const btn = e.target.closest('.js-details');
        if (btn) openDetails(btn.dataset.id);
    });

    document.querySelectorAll('.booking-panel').forEach((p) => p.classList.remove('active'));
    document.getElementById('active')?.classList.add('active');
    load();
});
</script>
@endpush
