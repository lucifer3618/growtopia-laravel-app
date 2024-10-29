@extends('layout.master')

@section('title', 'About')

@section('container', 'about-container container')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
@endsection

@section('script')
    <script src="{{ asset('js/about.js') }}"></script>
@endsection


@section('content')
    <!-- Start Main -->
    <section class="about-us">
        <div class="about-main">
            <div class="about-img">
                <img src="{{ asset('images/about/aboutus-hero.png') }}" alt="about">
            </div>
            <div class="about-content">
                <div class="about-text">
                    <div class="about-title">
                        <h4>About Us</h4>
                        <div></div>
                    </div>
                    <h1>Cultivating a Sustainable Future</h1>
                    <p>At our core, we are driven by a passion for sustainable farming and a commitment to empowering
                        growers
                        and
                        gardeners of all kinds. Our mission is to provide high-quality plants, seeds, and farming equipment,
                        along
                        with reliable and insightful resources to help our community cultivate a greener world. We believe
                        in the
                        power of nature and innovation working together to create a future where everyone has the tools and
                        knowledge
                        to grow their own food, nurture their gardens, and support the planet. Join us on this journey to
                        make
                        sustainable farming accessible and successful for everyone.</p>
                </div>
                <div class="about-btn">
                    <button>Learn More</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main -->

    <!-- Team Start -->
    <div class="team-container">
        <h1> Our Team</h1>

        <div class="team-row">

            @foreach ($team as $member)
                <div class="member {{ $member['id'] }} hidden">
                    <img src="{{ $member['img'] }}" alt="">
                    <h2>{{ $member['name'] }}</h2>
                    <p>{{ $member['job'] }}</p>
                    <div class="social">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Team end -->

@endsection
