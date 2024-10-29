<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <div class="logo-container me-auto">
            <img src="{{ asset("images/main/Growtopia-trans.png") }}" class="logo-img" alt="">
            <a class="navbar-brand" href="{{ route('home')}}">Growtopia</a>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                @guest
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    Growtopia
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                @endguest
                @auth
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        <h6 class="" style="color: rgb(0, 153, 112)">Hello! {{Auth::user()->name}}..</h6>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                @endauth
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 {{ request()->routeIs('news') ? 'active' : '' }}" href="{{ route('news')}}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 {{ request()->routeIs('products') ? 'active' : '' }}" href="{{ route('products') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 d-block d-lg-none {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile', Auth::user()->id) }}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 d-block d-lg-none {{ request()->routeIs('contact') ? 'active' : '' }}" href="#">Transections</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link mx-lg-2 d-block d-lg-none">Logout</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
        @guest
            <a href="{{ route('login') }}" class="login-button">Login</a>
            <button class="navbar-toggler" style="border: none; font-size: 1.25rem;" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        @endguest

        @auth
            <a href="{{ route('cart') }}">
                @livewire('cart-icon')
            </a>
            <img src="{{ Auth::user()->getImageURL() }}" class="d-block d-lg-none profile-img" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                aria-label="Toggle navigation">

            <li class="nav-item dropdown d-none d-lg-block">
                <img src="{{ Auth::user()->getImageURL() }}" class="nav-link profile-img" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu dropdown-menu-end">
                    <li class="d-flex align-items-center">
                        <a class="dropdown-item" href="{{ route('profile', Auth::user()->id) }}">
                            <i class="far fa-user-circle fa-lg me-3"></i>Profile
                        </a>
                    </li>
                    <li class="d-flex align-items-center">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-shopping-bag me-3"></i>Transactions
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li class="d-flex align-items-center logout">
                        <i class="fas fa-sign-out-alt ms-3"></i>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        @endauth

    </div>
</nav>
<!-- Navbar End -->
