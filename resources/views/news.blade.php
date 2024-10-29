@extends('layout.master')

@section('title', 'News')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endsection

@section('script')
    <script src="{{ asset('js/news.js') }}"></script>
@endsection


@section('content')
  <!-- News Section Start -->
  <main>
    <section class="home">
      <div class="home-text home-container">
        <h2 class="home-title">Stay Updated with the Latest in Farming</h2>
        <span class="home-subtext">
          Dive into a world of agriculture news, expert advice, and innovative ideas to help you cultivate
          success.
        </span>
      </div>
    </section>

    <div class="about about-container" id="about-container">
      <div class="content-container">
        <h2 class="title-text">Welcome to Growtopia's News Hub!</h2>
        <p class="title-subtext">At Growtopia, we believe that knowledge is the key to growth—both in the fields and
          beyond. Our news hub is your trusted source for the latest updates, expert insights, and valuable tips on
          everything related to farming and agriculture. Whether you are a seasoned farmer, an aspiring grower, or
          simply
          someone passionate about sustainable living, we're here to keep you informed and inspired.</p>
        <a href="#" class="read-more-btn">Read More</a>
      </div>
      <div class="img-container">
        <img src="{{ asset('images/news/news-section-about.webp') }}" alt="">
      </div>
    </div>

    <div class="news-filer-con">
      <div class="filer-item active-fil" data-filter="all">All</div>
      <div class="filer-item" data-filter="culti">Agriculture</div>
      <div class="filer-item" data-filter="tech">Agrotechnology</div>
      <div class="filer-item" data-filter="sus">Permaculture</div>
    </div>

    <div class="post post-container">
        @foreach ($newsList as $news)
            <div class="post-con {{ $news->class }}">
                <img src="{{ asset($news->img_path) }}" alt="" class="post-img">
                <h2 class="category"> {{ $news->category }}</h2>
                <a href="#" class="post-title"> {{ $news->title }} </a>
                <span class="post-date">{{ $news->created_at->format('d-m-Y') }}</span>
                <p class="post-subtext">{{ $news->content }}</p>
                <span class="author"> {{ $news->author }} </span>
            </div>
        @endforeach
    </div>
  </main>
  <!-- News Section End -->
@endsection
