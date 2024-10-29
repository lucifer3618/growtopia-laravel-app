@extends('layout.master')

@section('title', 'Products')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection

@section('script')
    <script src="{{ asset('js/products.js') }}"></script>
@endsection


@section('content')
    <!-- News Section Start -->
    <main>
        <!-- Shop Banner -->
        <div class="shop-banner">
            <img src="{{ asset('images/products/shop-banner.webp') }}" alt="">
        </div>

        {{-- Services Section --}}
        <div class="services">
            <div class="service">
                <div class="service-img">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h6l2 4m-8-4v8H9m4-8V6c0-.26522-.1054-.51957-.2929-.70711C12.5196 5.10536 12.2652 5 12 5H4c-.26522 0-.51957.10536-.70711.29289C3.10536 5.48043 3 5.73478 3 6v9h2m14 0h2v-4m0 0h-5M8 8.66669V10l1.5 1.5m10 5c0 1.3807-1.1193 2.5-2.5 2.5s-2.5-1.1193-2.5-2.5S15.6193 14 17 14s2.5 1.1193 2.5 2.5Zm-10 0C9.5 17.8807 8.38071 19 7 19s-2.5-1.1193-2.5-2.5S5.61929 14 7 14s2.5 1.1193 2.5 2.5Z" />
                    </svg>
                </div>
                <div class="service-info">
                    <div class="title">Fast delivery</div>
                    <div class="sub">Deliver within 48H</div>
                </div>
            </div>

            <div class="service">
                <div class="service-img">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z" />
                    </svg>

                </div>
                <div class="service-info">
                    <div class="title">Secure Payment</div>
                    <div class="sub">100% Secure Payments</div>
                </div>
            </div>

            <div class="service">
                <div class="service-img">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z" />
                    </svg>

                </div>
                <div class="service-info">
                    <div class="title">Wide Selection</div>
                    <div class="sub">All under one roof</div>
                </div>
            </div>

            <div class="service">
                <div class="service-img">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 2a7 7 0 0 0-7 7 3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V9a5 5 0 1 1 10 0v7.083A2.919 2.919 0 0 1 14.083 19H14a2 2 0 0 0-2-2h-1a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a2 2 0 0 0 1.732-1h.351a4.917 4.917 0 0 0 4.83-4H19a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3 7 7 0 0 0-7-7Zm1.45 3.275a4 4 0 0 0-4.352.976 1 1 0 0 0 1.452 1.376 2.001 2.001 0 0 1 2.836-.067 1 1 0 1 0 1.386-1.442 4 4 0 0 0-1.321-.843Z"
                            clip-rule="evenodd" />
                    </svg>

                </div>
                <div class="service-info">
                    <div class="title">24x7 Customer Service</div>
                    <div class="sub">Contact us at anytime</div>
                </div>
            </div>
        </div>

        {{-- Intro Section --}}
        <div class="intro">
            <div class="intro-img">
                <img src="{{ asset('images/products/shop-intro.png') }}" alt="" srcset="">
            </div>
            <div class="text">
                <div class="title">
                    <h1>Discover Grow Topia's Hidden Treasures</h1>
                </div>
                <div class="sub-text">
                    <p>Uncover the hidden gems of gardening with Grow Topia! Explore our carefully selected seeds,
                        unique plants, and essential tools, all designed to bring your garden dreams to life.
                        Whether you're just planting roots or tending to a thriving oasis, our shop has
                        everything you need to grow with confidence and curiosity. Dive in and discover what nature has in
                        store!</p>
                </div>
            </div>
        </div>

        <!-- Product Filters -->
        <div class="news-filer-con">
            <div class="filer-item active-fil" data-filter="all">All</div>
            <div class="filer-item" data-filter="seeds">Seeds</div>
            <div class="filer-item" data-filter="fertilizers">Fertilizers</div>
            <div class="filer-item" data-filter="equipments">Equipments</div>
        </div>

        <div class="products-main-container container pb-5">

            @livewire('products-list')

        </div>
    </main>
@endsection
