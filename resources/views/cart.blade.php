@extends('layout.master')

@section('title', 'Cart')

@section('container', 'cart-container')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('script')
    <script src="{{ asset('js/cart.js') }}"></script>
@endsection


@section('content')
    {{-- Cart section --}}
    @livewire('cart-table')

@endsection
