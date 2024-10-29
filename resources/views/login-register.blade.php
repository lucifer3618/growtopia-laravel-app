@extends('layout.master')

@section('title', 'Login')

@section('container', 'login-signup-container')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('script')
    <script src="{{ asset('js/login.js') }}"></script>
@endsection


@section('content')
    <!-- Form Start -->
    <main>
        <div class="container">
            <div class="inner-container">
                <div class="forms">

                    @include('includes.login-form')

                    @include('includes.register-form')

                </div>

                <div class="carousel">
                    <div class="images">
                        <img src="{{ asset('images/login-register/slider-img1.jpg') }}" class="image img1 show" alt="slider-img1">
                        <img src="{{ asset('images/login-register/slider-img2.jpg') }}" class="image img2" alt="slider-img2">
                        <img src="{{ asset('images/login-register/slider-img3.jpg') }}" class="image img3" alt="slider-img3">
                    </div>
                    <div class="text-slider">
                        <div class="sub-text">
                            <div class="text-group">
                                <h2>Explore our selection</h2>
                                <h2>Join our community </h2>
                                <h2>Receive personalized tips</h2>
                            </div>
                        </div>
                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Form End -->
@endsection
