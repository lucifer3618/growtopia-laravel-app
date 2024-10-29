<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    @livewireStyles

    <!-- Font import -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Sweet Alart CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    {{-- Custom Css --}}
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    @yield('style')
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <title>@yield('title')</title>
</head>

<body>

    <div class=@yield('container')>

        @include('includes.nav')

        @yield('content')

        @include('includes.footer')

    </div>

    @livewireScripts

    {{-- Sweet Alart CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- JQuery CDN -->
    <script src="{{ asset('js/JQuery/jquery-3.7.1.min.js') }}"></script>

    {{-- Custom js --}}
    @yield('script')

    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>

    <!-- Fontawesome CDN-->
    <script src="https://kit.fontawesome.com/34720af765.js" crossorigin="anonymous"></script>

</body>

</html>
