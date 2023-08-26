<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="../assets/images/favicon/4.png" type="image/x-icon">
    <title>On-demand last-mile delivery</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/bootstrap.css') }}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}" />

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/font-awesome.css') }}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/feather-icon.css') }}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/slick/slick-theme.css') }}">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bulk-style.css') }}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
</head>

<body class="theme-color-2 bg-effect">

    <!-- Loader Start -->
    <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Loader End -->

    <!-- Header Start -->
    <header class="header-2">
        <div class="header-notification theme-bg-color overflow-hidden py-2">
            <div class="notification-slider">
                <div>
                    <div class="timer-notification text-center">
                        <h6><strong class="me-1">Welcome to Fastkart!</strong>Wrap new offers/gift
                            every signle day on Weekends.<strong class="ms-1">New Coupon Code: Fast024
                            </strong>
                        </h6>
                    </div>
                </div>

                <div>
                    <div class="timer-notification text-center">
                        <h6>Something you love is now on sale!<a href="shop-left-sidebar.html" class="text-white">Buy
                                Now
                                !</a>
                        </h6>
                    </div>
                </div>
            </div>
            <button class="btn close-notification"><span>Close</span> <i class="fas fa-times"></i></button>
        </div>
        <div class="top-nav top-header sticky-header sticky-header-3">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar-top">
                            <button class="navbar-toggler d-xl-none d-block p-0 me-3" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="iconly-Category icli theme-color"></i>
                                </span>
                            </button>
                            <a href="index.html" class="web-logo nav-logo">
                                <img src="../assets/images/logo/3.png" class="img-fluid blur-up lazyload"
                                    alt="">
                            </a>

                            <div class="search-full">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i data-feather="search" class="font-light"></i>
                                    </span>
                                    <input type="text" class="form-control search-type" placeholder="Search here..">
                                    <span class="input-group-text close-search">
                                        <i data-feather="x" class="font-light"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="middle-box">
                                <div class="center-box">
                                    <div class="searchbar-box order-xl-1 d-none d-xl-block">
                                        <input type="search" class="form-control" id="exampleFormControlInput1"
                                            placeholder="search for product, delivered to your door...">
                                        <button class="btn search-button">
                                            <i class="iconly-Search icli"></i>
                                        </button>
                                    </div>
                                    <div class="location-box-2">
                                        <button class="btn location-button" data-bs-toggle="modal"
                                            data-bs-target="#locationModal">
                                            <i class="iconly-Location icli"></i>
                                            <span class="locat-name">Your Location</span>
                                            <i class="fa-solid fa-angle-down down-arrow"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            @if (Route::has('login'))
                                @auth
                                    @if (Auth::user()->utype === 'SADM')
                                        <div class="rightside-menu">
                                            <div class="dropdown-dollar">
                                                <div class="dropdown">
                                                    <li class="nav-item dropdown">
                                                        <a href="{{ route('superAdmin.dashboard') }}"
                                                            class="nav-link dropdown-toggle"
                                                            style="color: rgb(55, 58, 55)">Super Admin</a>
                                                    </li>
                                                </div>
                                                <div class="dropdown">
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                            this.closest('form').submit(); "
                                                                role="button" style="color: black;">
                                                                {{-- style="background-color: #0baf9a ; color:white"> --}}
                                                                {{-- <i class="fas fa-sign-out-alt"></i> --}}

                                                                {{ __('Log Out') }}
                                                            </a>
                                                        </li>
                                                    </form>

                                                </div>
                                            </div>
                                        @elseif(Auth::user()->utype === 'ADM')
                                            <div class="rightside-menu">
                                                <div class="dropdown-dollar">
                                                    <div class="dropdown">
                                                        <li class="nav-item dropdown">
                                                            <a href="{{ route('admin.dashboard') }}"
                                                                class="nav-link dropdown-toggle">Admin</a>
                                                        </li>
                                                    </div>
                                                    {{-- ADMIN --}}
                                                    <div class="dropdown">
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                    this.closest('form').submit(); "
                                                                    role="button"
                                                                    style="background-color: #0baf9a ; color:white">
                                                                    {{-- <i class="fas fa-sign-out-alt"></i> --}}

                                                                    {{ __('Log Out') }}
                                                                </a>
                                                            </li>
                                                        </form>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="rightside-menu">
                                                    <div class="dropdown-dollar">
                                                        <div class="dropdown">
                                                            <li class="nav-item dropdown">
                                                                USer
                                                            </li>
                                                        </div>
                                                        <div class="dropdown">
                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="{{ route('logout') }}"
                                                                        onclick="event.preventDefault();
                                                                        this.closest('form').submit(); "
                                                                        role="button">
                                                                        {{-- <i class="fas fa-sign-out-alt"></i> --}}

                                                                        {{ __('Log Out') }}
                                                                    </a>
                                                                </li>
                                                            </form>
                                                        </div>
                                                    </div>
                                    @endif
                                @else
                                    <div class="rightside-menu">
                                        <div class="dropdown-dollar">
                                            <div class="dropdown">
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item ps-xl-2 ps-0 h6 py-2 mb-3"
                                                        href="{{ route('login') }}">Login</a>
                                                </li>
                                            </div>
                                            <div class="dropdown">
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item ps-xl-2 ps-0 h6 py-2 mb-3"
                                                        href="{{ route('register') }}">Register</a>
                                                </li>
                                            </div>
                                        </div>
                                    @endauth
                                @else
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <li class="nav-item dropdown">
                                            <a class="dropdown-item ps-xl-2 ps-0 h6 py-2 mb-3">Login</a>

                                            <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                            this.closest('form').submit(); "
                                                role="button">
                                                <i class="fas fa-sign-out-alt"></i>

                                                {{ __('Log Out') }}
                                            </a>
                                        </li>
                                        {{-- </div> --}}
                                    </form>
                            @endif
                            {{-- @guest
                                        <li class="nav-item dropdown">
                                            <a class="dropdown-item ps-xl-2 ps-0 h6 py-2 mb-3"
                                                href="{{ route('login') }}">Login</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="dropdown-item ps-xl-2 ps-0 h6 py-2 mb-3"
                                                href="{{ route('register') }}">Register</a>
                                        </li>
                                        @else
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <div class="nav-item">
                                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit(); " role="button">
                                                    <i class="fas fa-sign-out-alt"></i>
                                    
                                                    {{ __('Log Out') }}
                                                </a>
                                            </div>
                                        </form>
                                        @endguest --}}


                                <div class="option-list">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="header-icon user-icon search-icon">
                                                <i class="iconly-Profile icli"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0)" class="header-icon search-box search-icon">
                                                <i class="iconly-Search icli"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="compare.html" class="header-icon">
                                                <small class="badge-number">2</small>
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>

                                        <li class="onhover-dropdown">
                                            <a href="javascript:void(0)" class="header-icon swap-icon">
                                                <i class="iconly-Heart icli"></i>
                                            </a>

                                        </li>

                                        <li class="onhover-dropdown">
                                            <a href="cart.html" class="header-icon bag-icon">
                                                <small class="badge-number">2</small>
                                                <i class="iconly-Bag-2 icli"></i>
                                            </a>
                                            <div class="onhover-div">
                                                <ul class="cart-list">
                                                    <li>
                                                        <div class="drop-cart">
                                                            <a href="product-left-thumbnail.html" class="drop-image">
                                                                <img src="../assets/images/vegetable/product/1.png"
                                                                    class="blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="drop-contain">
                                                                <a href="product-left-thumbnail.html">
                                                                    <h5>Fantasy Crunchy Choco Chip Cookies</h5>
                                                                </a>
                                                                <h6><span>1 x</span> $80.58</h6>
                                                                <button class="close-button">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="drop-cart">
                                                            <a href="product-left-thumbnail.html" class="drop-image">
                                                                <img src="../assets/images/vegetable/product/2.png"
                                                                    class="blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="drop-contain">
                                                                <a href="product-left-thumbnail.html">
                                                                    <h5>Peanut Butter Bite Premium Butter Cookies 600 g
                                                                    </h5>
                                                                </a>
                                                                <h6><span>1 x</span> $25.68</h6>
                                                                <button class="close-button">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>


                                                <div class="price-box">
                                                    <h5>Price :</h5>
                                                    <h4 class="theme-color fw-bold">$106.58</h4>
                                                </div>

                                                <div class="button-group">
                                                    <a href="cart.html" class="btn btn-sm cart-button">View Cart</a>
                                                    <a href="checkout.html"
                                                        class="btn btn-sm cart-button theme-bg-color
                                                    text-white">Checkout</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="main-nav">
                        {{-- <div class="header-nav-left">
                            <button class="dropdown-category dropdown-category-2">
                                <i class="iconly-Category icli"></i>
                                <span>All Categories</span>
                            </button>

                            <div class="category-dropdown">
                                <div class="category-title">
                                    <h5>Categories</h5>
                                    <button type="button" class="btn p-0 close-button text-content">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>

                                <ul class="category-list">
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <img src="../assets/svg/1/vegetable.svg" alt="">
                                            <h6>Vegetables & Fruit</h6>
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                        @livewire('category-view-component')

                        <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                            <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                <div class="offcanvas-header navbar-shadow">
                                    <h5>Menu</h5>
                                    <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown dropdown-mega">
                                            <a class="dropdown-item ps-xl-2 ps-0 h6 py-2 mb-3" href="/">Home</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="dropdown-item ps-xl-2 ps-0 h6 py-2 mb-3"
                                                href="{{ route('shop') }}">Shop</a>


                                        </li>

                                        <li class="nav-item dropdown dropdown-mega">
                                            <a class="nav-link dropdown-toggle ps-xl-2 ps-0" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Brand</a>

                                            <div class="dropdown-menu dropdown-menu-2">
                                                <div class="row">
                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Daily Vegetables</h5>
                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Beans &
                                                            Brinjals</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Broccoli
                                                            & Cauliflower</a>

                                                        <a href="shop-left-sidebar.html"
                                                            class="dropdown-item">Chilies,
                                                            Garlic</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Vegetables & Salads</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Gourd,
                                                            Cucumber</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Herbs &
                                                            Sprouts</a>

                                                        <a href="demo-personal-portfolio.html"
                                                            class="dropdown-item">Lettuce & Leafy</a>
                                                    </div>

                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Baby Tender</h5>
                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Beans &
                                                            Brinjals</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Broccoli
                                                            & Cauliflower</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Chilies,
                                                            Garlic</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Vegetables & Salads</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Gourd,
                                                            Cucumber</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Potatoes
                                                            & Tomatoes</a>

                                                        <a href="shop-left-sidebar.html" class="dropdown-item">Peas &
                                                            Corn</a>
                                                    </div>

                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Exotic Vegetables</h5>
                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Asparagus
                                                            & Artichokes</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Avocados
                                                            & Peppers</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Broccoli
                                                            & Zucchini</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Celery,
                                                            Fennel & Leeks</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Chilies
                                                            &
                                                            Lime</a>
                                                    </div>

                                                    <div class="dropdown-column dropdown-column-img col-3"></div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown new-nav-item">
                                            <label class="new-dropdown">New</label>
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li class="sub-dropdown-hover">
                                                    <a class="dropdown-item" href="javascript:void(0)">Email
                                                        Template <span class="new-text"><i
                                                                class="fa-solid fa-bolt-lightning"></i></span></a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a
                                                                href="../email-templete/abandonment-email.html">Abandonment</a>
                                                        </li>
                                                        <li>
                                                            <a href="../email-templete/offer-template.html">Offer
                                                                Template</a>
                                                        </li>
                                                        <li>
                                                            <a href="../email-templete/order-success.html">Order
                                                                Success</a>
                                                        </li>
                                                        <li>
                                                            <a href="../email-templete/reset-password.html">Reset
                                                                Password</a>
                                                        </li>
                                                        <li>
                                                            <a href="../email-templete/welcome.html">Welcome
                                                                template</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-dropdown-hover">
                                                    <a class="dropdown-item" href="javascript:void(0)">Invoice
                                                        Template <span class="new-text"><i
                                                                class="fa-solid fa-bolt-lightning"></i></span></a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="../invoice/invoice-1.html">Invoice 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="../invoice/invoice-2.html">Invoice 2</a>
                                                        </li>

                                                        <li>
                                                            <a href="../invoice/invoice-3.html">Invoice 3</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="404.html">404</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="about-us.html">About Us</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="contact-us.html">Contact</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="compare.html">Compare</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="faq.html">Faq</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="order-success.html">Order
                                                        Success</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="order-tracking.html">Order
                                                        Tracking</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="otp.html">OTP</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="search.html">Search</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="user-dashboard.html">User
                                                        Dashboard</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Seller</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="seller-become.html">Become a
                                                        Seller</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-dashboard.html">Seller
                                                        Dashboard</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-detail.html">Seller
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-detail-2.html">Seller
                                                        Detail 2</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-grid.html">Seller Grid</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-grid-2.html">Seller Grid
                                                        2</a>
                                                </li>
                                            </ul>
                                        </li>

                                        

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="right-nav">
                            <div class="nav-number">
                                <img src="../assets/images/icon/music.png" class="img-fluid blur-up lazyload"
                                    alt="">
                                <span>(123) 456 7890</span>
                            </div>
                            <a href="javascript:void(0)" class="btn theme-bg-color ms-3 fire-button"
                                data-bs-toggle="modal" data-bs-target="#deal-box">
                                <div class="fire">
                                    <img src="../assets/images/icon/hot-sale.png" class="img-fluid" alt="">
                                </div>
                                <span>Hot Deals</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            <li class="active">
                <a href="index.html">
                    <i class="iconly-Home icli"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="mobile-category">
                <a href="javascript:void(0)">
                    <i class="iconly-Category icli js-link"></i>
                    <span>Category</span>
                </a>
            </li>

            <li>
                <a href="search.html" class="search-box">
                    <i class="iconly-Search icli"></i>
                    <span>Search</span>
                </a>
            </li>

            <li>
                <a href="wishlist.html" class="notifi-wishlist">
                    <i class="iconly-Heart icli"></i>
                    <span>My Wish</span>
                </a>
            </li>

            <li>
                <a href="cart.html">
                    <i class="iconly-Bag-2 icli fly-cate"></i>
                    <span>Cart</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    {{ $slot }}
    <!-- Footer Start -->
    <footer class="section-t-space footer-section-2">
        <div class="container-fluid-lg">
            <div class="main-footer">
                <div class="row g-md-4 gy-sm-5 gy-2">
                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                        <a href="index.html" class="foot-logo">
                            <img src="../assets/images/logo/3.png" class="img-fluid" alt="">
                        </a>
                        <p class="information-text">it is a long established fact that a reader will be distracted
                            by the readable content.</p>
                        <ul class="social-icon">
                            <li>
                                <a href="www.facebook.com">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="www.goolge.com">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li>
                                <a href="www.twitter.com">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="www.instagram.com">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="www.pinterest.com">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                        </ul>

                        <div class="social-app mt-sm-4 mt-3 mb-4">
                            <ul>
                                <li>
                                    <a href="https://play.google.com/store/apps" target="_blank">
                                        <img src="../assets/images/playstore.svg" class="blur-up lazyload"
                                            alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.apple.com/in/app-store/" target="_blank">
                                        <img src="../assets/images/appstore.svg" class="blur-up lazyload"
                                            alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4>About Fastkart</h4>
                        </div>
                        <ul class="footer-list footer-contact mb-sm-0 mb-3">
                            <li>
                                <a href="about-us.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>About Us</a>
                            </li>
                            <li>
                                <a href="contact-us.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>Contact Us</a>
                            </li>
                            <li>
                                <a href="term_condition.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>Terms & Coditions</a>
                            </li>
                            <li>
                                <a href="careers.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>Careers</a>
                            </li>
                            <li>
                                <a href="blog-list.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>Latest Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4>Useful Link</h4>
                        </div>
                        <ul class="footer-list footer-contact mb-sm-0 mb-3">
                            <li>
                                <a href="order-success.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>Your Order</a>
                            </li>
                            <li>
                                <a href="user-dashboard.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>Your Account</a>
                            </li>
                            <li>
                                <a href="order-tracking.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>Track Orders</a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>Your Wishlist</a>
                            </li>
                            <li>
                                <a href="faq.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>FAQs</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4>Categories</h4>
                        </div>
                        <ul class="footer-list footer-contact mb-sm-0 mb-3">
                            <li>
                                <a href="vegetables-demo.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>Fresh Vegetables</a>
                            </li>
                            <li>
                                <a href="spice-demo.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>Hot Spice</a>
                            </li>
                            <li>
                                <a href="bags-demo.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>Brand New Bags</a>
                            </li>
                            <li>
                                <a href="bakery-demo.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>New Bakery</a>
                            </li>
                            <li>
                                <a href="grocery-demo.html" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>New Grocery</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4>Store infomation</h4>
                        </div>
                        <ul class="footer-address footer-contact">
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="inform-box flex-start-box">
                                        <i data-feather="map-pin"></i>
                                        <p>Fastkart Demo Store, Demo store india 345 - 659</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <div class="inform-box">
                                        <i data-feather="phone"></i>
                                        <p>Call us: 123-456-7890</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <div class="inform-box">
                                        <i data-feather="mail"></i>
                                        <p>Email Us: Support@Fastkart.com</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <div class="inform-box">
                                        <i data-feather="printer"></i>
                                        <p>Fax: 123456</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sub-footer section-small-space">
                <div class="left-footer">
                    <p>2022 Copyright By Themeforest Powered By Pixelstrap</p>
                </div>
                <div class="right-footer">
                    <ul class="payment-box">
                        <li>
                            <img src="../assets/images/icon/paymant/visa.png" alt="">
                        </li>
                        <li>
                            <img src="../assets/images/icon/paymant/discover.png" alt="">
                        </li>
                        <li>
                            <img src="../assets/images/icon/paymant/american.png" alt="">
                        </li>
                        <li>
                            <img src="../assets/images/icon/paymant/master-card.png" alt="">
                        </li>
                        <li>
                            <img src="../assets/images/icon/paymant/giro-pay.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Quick View Modal Box Start -->
    <div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-sm-4 g-2">
                        <div class="col-lg-6">
                            <div class="slider-image">
                                <img src="../assets/images/product/category/1.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-sidebar-modal">
                                <h4 class="title-name">Peanut Butter Bite Premium Butter Cookies 600 g</h4>
                                <h4 class="price">$36.99</h4>
                                <div class="product-rating">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span class="ms-2">8 Reviews</span>
                                    <span class="ms-2 text-danger">6 sold in last 16 hours</span>
                                </div>

                                <div class="product-detail">
                                    <h4>Product Details :</h4>
                                    <p>Candy canes sugar plum tart cotton candy chupa chups sugar plum chocolate I love.
                                        Caramels marshmallow icing dessert candy canes I love soufflé I love toffee.
                                        Marshmallow pie sweet sweet roll sesame snaps tiramisu jelly bear claw. Bonbon
                                        muffin I love carrot cake sugar plum dessert bonbon.</p>
                                </div>

                                <ul class="brand-list">
                                    <li>
                                        <div class="brand-box">
                                            <h5>Brand Name:</h5>
                                            <h6>Black Forest</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Code:</h5>
                                            <h6>W0690034</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Type:</h5>
                                            <h6>White Cream Cake</h6>
                                        </div>
                                    </li>
                                </ul>

                                <div class="select-size">
                                    <h4>Cake Size :</h4>
                                    <select class="form-select select-form-size">
                                        <option selected>Select Size</option>
                                        <option value="1.2">1/2 KG</option>
                                        <option value="0">1 KG</option>
                                        <option value="1.5">1/5 KG</option>
                                        <option value="red">Red Roses</option>
                                        <option value="pink">With Pink Roses</option>
                                    </select>
                                </div>

                                <div class="modal-button">
                                    <button onclick="location.href = 'cart.html';"
                                        class="btn btn-md add-cart-button icon">Add
                                        To Cart</button>
                                    <button onclick="location.href = 'product-left.html';"
                                        class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                        View More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal Box End -->

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                    <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="location-list">
                        <div class="search-input">
                            <input type="search" class="form-control" placeholder="Search Your Area">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <div class="disabled-box">
                            <h6>Select a Location</h6>
                        </div>

                        <ul class="location-select custom-height">
                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Alabama</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Arizona</h6>
                                    <span>Min: $150</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>California</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Colorado</h6>
                                    <span>Min: $140</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Florida</h6>
                                    <span>Min: $160</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Georgia</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Kansas</h6>
                                    <span>Min: $170</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Minnesota</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>New York</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Washington</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->

    <!-- Deal Box Modal Start -->
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                        <p class="mt-1 text-content">Recommended deals for you.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="deal-offer-box">
                        <ul class="deal-offer-list">
                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../assets/images/vegetable/product/10.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-2">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../assets/images/vegetable/product/11.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-3">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../assets/images/vegetable/product/12.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../assets/images/vegetable/product/13.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Box Modal End -->

    <!-- Cookie Bar Box Start -->
    <div class="cookie-bar-box">
        <div class="cookie-box">
            <div class="cookie-image">
                <img src="../assets/images/cookie-bar.png" class="blur-up lazyload" alt="">
                <h2>Cookies!</h2>
            </div>

            <div class="cookie-contain">
                <h5 class="text-content">We use cookies to make your experience better</h5>
            </div>
        </div>

        <div class="button-group">
            <button class="btn privacy-button">Privacy Policy</button>
            <button class="btn ok-button">OK</button>
        </div>
    </div>
    <!-- Cookie Bar Box End -->

    <!-- Items section Start -->
    <div class="button-item">
        <button class="item-btn btn text-white">
            <i class="iconly-Bag-2 icli"></i>
        </button>
    </div>
    <div class="item-section">
        <button class="close-button">
            <i class="fas fa-times"></i>
        </button>
        <h6>
            <i class="iconly-Bag-2 icli"></i>
            <span>5 Items</span>
        </h6>
        <ul class="items-image">
            <li>
                <img src="../assets/images/veg-3/cate1/1.png" alt="">
            </li>
            <li>
                <img src="../assets/images/veg-3/cate1/2.png" alt="">
            </li>
            <li>+3</li>
        </ul>
        <button onclick="location.href = 'cart.html';" class="btn item-button btn-sm fw-bold">$ 20.70</button>
    </div>
    <!-- Items section End -->

    <!-- Tap to top start -->
    <div class="theme-option">
        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <script src="{{ asset('/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- jquery ui-->
    <script src="{{ asset('/assets/js/jquery-ui.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap/popper.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('/assets/js/feather/feather.min.js') }}"></script>
    <script src="{{ asset('/assets/js/feather/feather-icon.js') }}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('/assets/js/lazysizes.min.js') }}"></script>

    <!-- Slick js-->
    <script src="{{ asset('/assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('/assets/js/slick/custom_slick.js') }}"></script>

    <!-- Auto Height Js -->
    <script src="{{ asset('/assets/js/auto-height.js') }}"></script>

    <!-- Quantity Js -->
    <script src="{{ asset('/assets/js/quantity.js') }}"></script>

    <!-- Timer Js -->
    <script src="{{ asset('/assets/js/timer1.js') }}"></script>
    <script src="{{ asset('/assets/js/timer2.js') }}"></script>
    <script src="{{ asset('/assets/js/timer3.js') }}"></script>
    <script src="{{ asset('/assets/js/timer4.js') }}"></script>

    <!-- Fly Cart Js -->
    <script src="{{ asset('/assets/js/fly-cart.js') }}"></script>

    <!-- WOW js -->
    <script src="{{ asset('/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('/assets/js/custom-wow.js') }}"></script>

    <!-- script js -->
    <script src="{{ asset('/assets/js/script.js') }}"></script>
</body>

</html>
