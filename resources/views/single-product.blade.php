@extends('layout.master')

@section('title', 'Product')

@section('container', 'product-container')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/single-product.css') }}">
@endsection

@section('script')
    <script src="{{ asset('js/single-product.js') }}"></script>
@endsection


@section('content')

    @livewire('add-review-model', ['product' => $currentProduct])

    <section class="container single-product mt-3 mb-2 p-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-sm-12 me-lg-4">
                <img class="img-fluid" src="{{ asset($currentProduct->getImageURL()) }}" alt="">
            </div>
            <div class="p-info col-lg-6 col-md-12 col-sm-12">
                <h6 class="path">Home / Products / {{ $currentProduct->category }}</h6>
                <h2 class="py-3">{{ $currentProduct->name }}</h2>
                <h3 class="pri">Rs.{{ $currentProduct->price }}.00</h3>
                <div class="installment">
                    <p>or 3 installments of Rs.{{ number_format($currentProduct->price / 3, 2) }} with</p>
                    <img src="{{ asset('images/products/mintpay.png') }}" alt="">
                </div>
                <small>"{{ $currentProduct->sub_text }}"</small>

                @livewire('add-to-cart', ['product' => $currentProduct])

                <h4 class="mt-4 my-3">Product Details</h4>
                <p class="p-description">{{ $currentProduct->description }}</p>
                <div class="icons">
                    <div class="compare">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.484 9.166 15 7h5m0 0-3-3m3 3-3 3M4 17h4l1.577-2.253M4 7h4l7 10h5m0 0-3 3m3-3-3-3" />
                        </svg>
                        <span class='icon-text'>Compare</span>
                    </div>
                    <div class="favorit">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                        </svg>
                        <span class='icon-text'>Add to Wishlist</span>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-5">
    </section>

    @livewire('review-section', ['product' => $currentProduct])

    <section class="container simmiler-con mb-2 p-5">
        <hr>
        <div class="simmiler-title">
            <h1 class="simmiler-title-text">Simmiler Products</h1>
            <div class="line"></div>
        </div>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 my-5">
            @foreach ($simmilerProducts as $product)
                <a href="{{ route('product.show', $product) }}" class="">
                    <div class="col {{ strtolower($product->category) }}">
                        <div class="card product-card">
                            <img src="{{ asset($product->getImageURL()) }}" class="card-img-top image-fluid product-image"
                                alt="{{ $product->name }}">
                            <div class="product-card-body">
                                <div class="info">
                                    <h4 class="product-card-title">{{ $product->name }}</h4>
                                    <h3 class="price">Rs.{{ $product->price }}/=</h3>
                                </div>
                                <p class="product-card-text">{{ $product->sub_text }}.</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>


@endsection
