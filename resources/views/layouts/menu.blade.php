<div class="main-wrapper">

    <!-- Preloader start -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    <div class="meeta-header-section meeta-header-2 meeta-header-3 meeta-header-5">

        <!-- Header Middle Start -->
        <div class="header-middle header-sticky">
            <div class="container">

                <div class="header-wrap">
                    <!-- Header Logo Start -->
                    <div class="header-logo header-logo-3">
                        <a class="logo-light" href="/"><img src="{{ asset('assets/images/TE505.png') }}"
                                alt="Logo"></a>
                        {{-- <a class="logo-white" href="/"><img src="{{ asset('assets/images/logo-4.png') }}"
                                alt="Logo"></a> --}}
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Navigation Start -->
                    <div class="header-navigation d-none d-lg-block">
                        <ul class="main-menu">
                            <li class="active-menu"><a href="{{ route('home') }}">Home</a>

                            </li>
                            <li><a href="/About">About</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="/blog">Blog</a></li>
                                    <li><a href="/Gallery">Gallery</a></li>
                                </ul>
                            </li>
                            <li class="me-5"><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="#">Connexion</a>
                                <ul class="sub-menu">
                                    <div class="navbar-nav ml-auto py-0">
                                        @if (Auth::user())
                                            @if (Auth::user()->user_type == 'admin')
                                                <a href="/admin/dashboard" class="nav-item nav-link">Dashboard</a>
                                            @endif
                                            @if (Auth::user()->user_type == 'user')
                                                <a href="/user/dashboard" class="nav-item nav-link">Dashboard</a>
                                            @endif


                                            <a href="{{ route('logout') }}" class="nav-item nav-link mb-5">logout</a>
                                    </div>
                                @else
                                    <div class="navbar-nav ml-auto py-0">
                                        <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                                        <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                                    </div>
                                    @endif
                                </ul>
                            </li>

                        </ul>
                        <!-- Header Navigation End -->

                    </div>
                    <div class="col-lg-3 col-8">

                        <!-- Header Meta Start -->
                        <div class="header-meta ms-5">

                            <div class="header-actions">
                                <div class="header-action">
                                    <a class="icon-open-container text-danger" href="{{ route('cart') }}" id="my cart">
                                        <span class="action-text">My Cart</span>
                                        <i class="flaticon-shopping-cart"></i>
                                        {{-- @if (Auth::user())
                                            <span class="count">{{ count($orders->ligne) }}</span>
                                        @endif --}}
                                    </a>
                                </div>
                                <div class="header-action d-none d-sm-block">
                                    <div class="header-search">
                                        <a class="search-btn" href="#"><i class="flaticon-loupe"></i></a>
                                        <div class="search-wrap">
                                            <div class="search-inner">
                                                <i id="search-close" class="flaticon-close search-close"></i>
                                                <div class="search-cell">
                                                    <form action="search" method="POST" name="key">
                                                        @csrf
                                                        <div class="search-field-holder">
                                                            <input class="main-search-input" type="search"
                                                                placeholder="Search Your Keyword...">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-meta">


                                <!-- Mini Cart Box Start -->
                                <div class="meeta-mini-cart-box" id="my cart">

                                    <div class="mini-cart-items">

                                        <div class="mini-cart-item">
                                            <div class="mini-cart-item-image">
                                                <a href="#"><img src="assets/images/cart/cart-1.jpg"
                                                        alt="Cart"></a>
                                            </div>
                                            <div class="mini-cart-item-content">
                                                <h4 class="mini-cart-title"><a href="#">Virtual Event with
                                                        Protected Content and Hidden Livestream </a></h4>
                                                <p class="mini-cart-quantity">1 × $19.99</p>
                                            </div>
                                            <button class="btn-close"></button>
                                        </div>

                                        <div class="mini-cart-item">
                                            <div class="mini-cart-item-image">
                                                <a href="#"><img src="assets/images/cart/cart-2.jpg"
                                                        alt="Cart"></a>
                                            </div>
                                            <div class="mini-cart-item-content">
                                                <h4 class="mini-cart-title"><a href="#">Virtual Event with
                                                        Protected Content and Hidden Livestream </a></h4>
                                                <p class="mini-cart-quantity">1 × $19.99</p>
                                            </div>
                                            <button class="btn-close"></button>
                                        </div>

                                        <div class="mini-cart-item">
                                            <div class="mini-cart-item-image">
                                                <a href="#"><img src="assets/images/cart/cart-3.jpg"
                                                        alt="Cart"></a>
                                            </div>
                                            <div class="mini-cart-item-content">
                                                <h4 class="mini-cart-title"><a href="#">Virtual Event with
                                                        Protected Content and Hidden Livestream </a></h4>
                                                <p class="mini-cart-quantity">1 × $19.99</p>
                                            </div>
                                            <button class="btn-close"></button>
                                        </div>

                                    </div>

                                    <div class="mini-cart-sub-total">
                                        <p><strong>Subtotal:</strong> <span class="mini-cart-amount">$99.97</span></p>
                                    </div>
                                    <div class="mini-cart-sub-btn">
                                        <a class="btn btn-primary" href="#">View cart</a>
                                        <a class="btn btn-white" href="#">Checkout</a>
                                    </div>
                                </div>
                                <!-- Mini Cart Box End -->

                            </div>
                            <!-- Mini Cart End -->
                            <!-- Header Toggle Start -->
                            <div class="header-toggle d-lg-none">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                            <!-- Header Toggle End -->

                        </div>
                        <!-- Header Meta End -->

                    </div>

                </div>
            </div>
            <!-- Header Middle End -->

        </div>
        <!-- Header End -->
