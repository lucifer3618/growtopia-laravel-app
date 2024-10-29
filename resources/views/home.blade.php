@extends('layout.master')

@section('title', 'Home')

@section('container', 'home-container')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('script')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection


@section('content')

    @include('includes.carousel')

    <!-- Service Star -->
    <div class="service-container">
        <h1>Our Services</h1>

        <div class="service-row">
            <!-- Service 1 -->
            <div class="service">
                <i class="fa-solid fa-building-wheat"></i>
                <h2>Agricultural Supplies</h2>
                <p>Discover a wide range of essential farming tools and equipment</p>
            </div>

            <!-- Service 2 -->
            <div class="service">
                <i class="fa-solid fa-seedling"></i>
                <h2>Plant Nursery</h2>
                <p>Find healthy and high-quality plants for your farm</p>
            </div>

            <!-- Service 3 -->
            <div class="service">
                <i class="fa-solid fa-wheat-awn"></i>
                <h2>Seed Store</h2>
                <p>Choose from a variety of seeds for your crops</p>
            </div>

            <!-- Service 4 -->
            <div class="service">
                <i class="fa-solid fa-microchip"></i>
                <h2>Agri-Tech Solutions</h2>
                <p>Explore innovative technologies to improve your farming efficiency</p>
            </div>
        </div>
    </div>
    <!-- Service end -->

    <!-- Why section Start -->
    <div class="why-section">
        <div class="why-img">
            <img src="{{ asset('images/home/why.png') }}" alt="" srcset="">
        </div>
        <div class="why-content">
            <h2>
                <p>Why you should</p> Choose Us?
            </h2>
            <ul class="why-points">
                <li class="point point1 hidden">
                    <i class="fa-solid fa-fire"></i>
                    <p>Wide range of products: Offer a diverse selection of farming supplies, including seeds,
                        plants,
                        equipment,
                        and more.</p>
                </li>
                <li class="point point2 hidden">
                    <i class="fa-solid fa-fire"></i>
                    <p>High-quality standards: Ensure that all products meet or exceed industry quality standards.
                    </p>
                </li>
                <li class="point point3 hidden">
                    <i class="fa-solid fa-fire"></i>
                    <p>Trusted suppliers: Partner with reputable suppliers to guarantee product reliability.</p>
                </li>
            </ul>
            <a href="#">Read More</a>
        </div>

    <!-- Why section end -->
</div>
@endsection


