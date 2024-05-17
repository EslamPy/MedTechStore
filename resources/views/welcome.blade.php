@extends('Layouts.master')

@section('static')
    <!DOCTYPE html>
    
    <body>
        <!-- search area -->
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="close-btn"><i class="fas fa-window-close"></i></span>
                        <div class="search-bar">
                            <div class="search-bar-tablecell">
                                <h3>Search For:</h3>
                                <input type="text" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end search area -->

        <!-- home page slider -->
        <div class="homepage-slider">
            <!-- single home slider -->
            <div class="single-homepage-slider homepage-bg-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                            <div class="hero-text">
                                <div class="hero-text-tablecell">
                                    <p class="subtitle">Cutting-Edge & Reliable</p>
                                    <h1>High-Performance PC Parts</h1>
                                    <div class="hero-btns">
                                        <a href="{{ route('shop') }}" class="boxed-btn">Tech Essentials Collection</a>
                                        <a href="{{ route('contact') }}" class="bordered-btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single home slider -->
            <div class="single-homepage-slider homepage-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 text-center">
                            <div class="hero-text">
                                <div class="hero-text-tablecell">
                                    <p class="subtitle">Open Everyday</p>
                                    <h1>100% Organic Collection</h1>
                                    <div class="hero-btns">
                                        <a href="{{ route('shop') }}" class="boxed-btn">Visit Shop</a>
                                        <a href="{{ route('contact') }}" class="bordered-btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single home slider -->
            <div class="single-homepage-slider homepage-bg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 text-right">
                            <div class="hero-text">
                                <div class="hero-text-tablecell">
                                    <p class="subtitle">Mega Sale Going On!</p>
                                    <h1>Get December Discount</h1>
                                    <div class="hero-btns">
                                        <a href="{{ route('shop') }}" class="boxed-btn">Visit Shop</a>
                                        <a href="{{ route('contact') }}" class="bordered-btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end home page slider -->

        <!-- features list section -->
        <div class="list-section pt-80 pb-80">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="list-box d-flex align-items-center">
                            <div class="list-icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="content">
                                <h3>Free Shipping</h3>
                                <p>When order over $75</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="list-box d-flex align-items-center">
                            <div class="list-icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <div class="content">
                                <h3>24/7 Support</h3>
                                <p>Get support all day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="list-box d-flex justify-content-start align-items-center">
                            <div class="list-icon">
                                <i class="fas fa-sync"></i>
                            </div>
                            <div class="content">
                                <h3>Refund</h3>
                                <p>Get refund within 3 days !</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end features list section -->

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Our</span> Products</h3>
                        <p>"Upgrade your PC with top-quality components. Explore our range of PC parts now!"</p>
                    </div>
                </div>
            </div>
        </div>
        </section>
        </div>

        <!-- Product Section -->
        <section div class="container" style="margin-top: -18px; max-width: 1212px;">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="{{ asset('assets/img/Project-images/Ram.jpg') }}" alt="IMG-BENNER"
                            style="width: 100%;max-width: 100%;height: auto;margin-left: 5px;">
                        <div class="block1-wrapbtn w-size2">
                            <a href="{{ route('shop') }}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                Ram
                            </a>
                        </div>
                    </div>

                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="{{ asset('assets/img/Project-images/Motherboard.png') }}" alt="IMG-BENNER"
                            style="width: 100%;max-width: 100%;height: auto;margin-left: 2px;">
                        <div class="block1-wrapbtn w-size2">
                            <a href="{{ route('shop') }}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                Motherboard
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="{{ asset('assets/img/Project-images/GPU.jpg') }}" alt="IMG-BENNER"
                            style="width: 100%;max-width: 100%;height: auto;margin-left: -3px;">
                        <div class="block1-wrapbtn w-size2">
                            <a href="{{ route('shop') }}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                GPU
                            </a>
                        </div>
                    </div>

                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="{{ asset('assets/img/Project-images/Powersupply.png') }}" alt="IMG-BENNER"
                            style="width: 100%;max-width: 100%;height: auto;margin-left: -9px; margin-top: 51px;">
                        <div class="block1-wrapbtn w-size2">
                            <a href="{{ route('shop') }}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                Power Supply
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="{{ asset('assets/img/Project-images/CPU.jpg') }}" alt="IMG-BANNER"
                            style="width: 100%; max-width: 100%; height: auto; margin-left: -1px;">
                        <div class="block1-wrapbtn w-size2">
                            <a href="{{ route('shop') }}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                CPU
                            </a>
                        </div>
                    </div>

                    <div class="block2 wrap-pic-w pos-relative m-b-30">
                        <img src="{{ asset('assets/img/bg-01.jpg') }}" alt="IMG"
                            style="width: 100%;max-width: 100%;height: auto;margin-left: -1px;">
                        <div class="block2-content sizefull ab-t-l flex-col-c-m">
                            <h4 class="m-text4 t-center w-size3 p-b-8">
                                Sign up & get 20% off
                            </h4>
                            <p class="t-center w-size4">
                                Be the first to know about the latest fashion news and get exclusive offers
                            </p>
                            <div class="w-size2 p-t-25">
                                <a href="#" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                                    Sign Up
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- End Product Section -->

        <!-- Feautre PRODUCTS -->
        <section class="latest-items section-padding fix">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-40">
                        <h2>You May Like</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="latest-items-active" style="width: 150%; margin-left: -264px;">
    
                    @foreach ($_category->take(5) as $item)
                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="{{ route('Products') }}"><img src="{{ asset($item->imgpath) }}" alt></a>
                                <div class="socal_icon">
                                    <a href="{{ route('cart') }}"><i class="ti-shopping-cart"></i></a>
                                    <a href=""><i class="ti-heart"></i></a>
                                    <a href="{{ route('Products') }}"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="{{ route('Products') }}">{{ $item->name }}</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>${{ $item->price }} <span>${{ $item->regular_price }}</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </section>
        <!-- Feautre PRODUCTS -->

        
        <!-- OUR PRODUCTS -->
            <section class="bgwhite p-t-45 p-b-58">
            <div class="container"style="max-width: 1797px; padding: 30px;">
                <div class="sec-title p-b-22">
                    <h3 class="m-text5 t-center">Featured Products</h3>
                </div>

                <div class="tab01">

                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Best Seller</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#featured" role="tab">Featured</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#sale" role="tab">Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">Top Rate</a>
                        </li>
                    </ul>

                    <div class="tab-content p-t-35">
                        <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                            <img src="{{ asset($item->imgpath) }}" alt="IMG-PRODUCT" style="margin-top: 113px;">
                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>
                                                
                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="{{ route('Products') }}" class="block2-name dis-block s-text3 p-b-5">
                                                {{ $item->name }}
                                            </a>
                                            <span class="block2-price m-text6 p-r-5">
                                                ${{ $item->price }}
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                @foreach ($_category->take(4) as $item)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <img src="{{ asset($item->imgpath) }}" alt="IMG-PRODUCT" style="margin-top: 113px;">
                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>
                                                
                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block2-txt p-t-20">
                                            <a href="{{ route('Products') }}" class="block2-name dis-block s-text3 p-b-5">
                                                {{ $item->name }}
                                            </a>
                                            <span class="block2-price m-text6 p-r-5">
                                                ${{ $item->price }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="featured" role="tabpanel">
                            <div class="row">
                                @foreach ($_category->take(5) as $item)
                                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                        <div class="block2">
                                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                                <img src="{{ asset($item->imgpath) }}" alt="IMG-PRODUCT" style="margin-top: 113px;">
                                                <div class="block2-overlay trans-0-4">
                                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                    </a>
                                                    
                                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                            Add to Cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block2-txt p-t-20">
                                                <a href="{{ route('Products') }}" class="block2-name dis-block s-text3 p-b-5">
                                                    {{ $item->name }}
                                                </a>
                                                <span class="block2-oldprice m-text7 p-r-5">
                                                    $29.50
                                                </span>
                                                <span class="block2-newprice m-text8 p-r-5">
                                                    ${{ $item->price }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="sale" role="tabpanel">
                            <div class="row">
                                @foreach ($_category->take(4) as $item)
                                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                        <div class="block2">
                                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                                <img src="{{ asset($item->imgpath) }}" alt="IMG-PRODUCT" style="margin-top: 113px;">
                                                <div class="block2-overlay trans-0-4">
                                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                            Add to Cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block2-txt p-t-20">
                                                <a href="{{ route('Products') }}" class="block2-name dis-block s-text3 p-b-5">
                                                    {{ $item->name }}
                                                </a>
                                                <span class="block2-price m-text6 p-r-5">
                                                    ${{ $item->price }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="top-rate" role="tabpanel">
                            <div class="row">
                                @foreach ($_category->take(6) as $item)
                                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                        <div class="block2">
                                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                                <img src="{{ asset($item->imgpath) }}" alt="IMG-PRODUCT" style="margin-top: 113px;">
                                                <div class="block2-overlay trans-0-4">
                                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                            Add to Cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block2-txt p-t-20">
                                                <a href="{{ route('Products') }}" class="block2-name dis-block s-text3 p-b-5">
                                                    {{ $item->name }}
                                                </a>
                                                <span class="block2-price m-text6 p-r-5">
                                                    ${{ $item->price }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
        <!-- End OUR PRODUCTS -->

        <!-- cart banner section -->
        <section class="cart-banner pt-100 pb-100">
            <div class="container">
                <div class="row clearfix">
                    <!--Image Column-->
                    <div class="image-column col-lg-6">
                        <div class="image">
                            <div class="price-box">
                                <div class="inner-price">
                                    <span class="price">
                                        <strong>30%</strong> <br> off Case</span>
                                </div>
                            </div>
                            <img src="{{ asset('assets/img/Project-images/Pc Gaming.png') }}" alt="" style="max-width: 80%; margin-left: 83px; margin-top: -61px;">
                        </div>
                    </div>

                    <!--Content Column-->
                    <div class="content-column col-lg-6">
                        <h3><span class="orange-text">Deal</span> of the month</h3>
                        <h4>Lian Li O11 Dynamic XL</h4>
                        <div class="text" style="display: block !important;" >Discover our 30% Off Deal of the Month on LianLi PC cases! Elevate your setup
                        with style and performance. This limited-time offer won't last, so act fast!"</div>

                        <!--Countdown Timer-->
                        <div class="time-counter">
                            <div class="time-countdown clearfix" data-countdown="2020/2/01">
                                <div class="counter-column">
                                    <div class="inner"><span class="count">00</span>Days</div>
                                </div>
                                <div class="counter-column">
                                    <div class="inner"><span class="count">00</span>Hours</div>
                                </div>
                                <div class="counter-column">
                                    <div class="inner"><span class="count">00</span>Mins</div>
                                </div>
                                <div class="counter-column">
                                    <div class="inner"><span class="count">00</span>Secs</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('cart') }}" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Countdown Timer-->

        <!-- shop banner -->
        <section class="shop-banner">
            <div class="container">
                <h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
                <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
                <a href="{{ route('shop') }}" class="cart-btn btn-lg">Shop Now</a>
            </div>
        </section>
        <!-- end shop banner -->

        <!-- latest news -->
        <div class="latest-news pt-150 pb-150">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title" style="margin-top: -110px">
                            <h3><span class="orange-text">Tech</span> Updates</h3>
                            <p>
                            Stay informed with Our News. Get the latest tech insights and product tips to enhance your PC experience.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="{{ route('news') }}">
                                <div class="latest-news-bg news-bg-1"></div>
                            </a>
                            <div class="news-text-box">
                                <h3><a href="{{ route('news') }}">Graphics Card Shortages</a></h3>
                                <p class="blog-meta">
                                    <span class="author"><i class="fas fa-user"></i> Adam</span>
                                    <span class="date"><i class="fas fa-calendar"></i> 27 December, 2023</span>
                                </p>
                                <p class="excerpt">Gamers faced a severe shortage of graphics cards due to high demand, cryptocurrency mining, and supply chain disruptions, causing inflated prices and limited availability.</p>
                                <a href="{{ route('news') }}" class="read-more-btn">read more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="{{ route('news') }}">
                                <div class="latest-news-bg news-bg-2"></div>
                            </a>
                            <div class="news-text-box">
                                <h3><a href="{{ route('news') }}">NVIDIA's RTX 40 Series</a></h3>
                                <p class="blog-meta">
                                    <span class="author"><i class="fas fa-user"></i> Admin</span>
                                    <span class="date"><i class="fas fa-calendar"></i> 27 December, 2023</span>
                                </p>
                                <p class="excerpt">NVIDIA's RTX 30 series graphics cards, introduced in 2020, continued to
                                    dominate the market. Models like the RTX 3060 Ti and RTX 3080 offered exceptional
                                    performance and support.</p>
                                <a href="{{ route('news') }}" class="read-more-btn">read more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="single-latest-news">
                            <a href="{{ route('news') }}">
                                <div class="latest-news-bg news-bg-3"></div>
                            </a>
                            <div class="news-text-box">
                                <h3><a href="{{ route('news') }}">Good thoughts bear good fresh juicy fruit.</a></h3>
                                <p class="blog-meta">
                                    <span class="author"><i class="fas fa-user"></i> Admin</span>
                                    <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                                </p>
                                <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                    Praesent vitae mattis nunc, egestas viverra eros.</p>
                                <a href="{{ route('news') }}" class="read-more-btn">read more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="{{ route('news') }}" class="boxed-btn">More News</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end latest news -->


        <!-- testimonail-section -->

        <div class="section-title" style="margin-top: -97px">
            <h3><span class="orange-text">Our</span> Reviews</h3>
            <p>"Discover what our customers have to say about our top-quality components and products. Explore our latest
                reviews now!"</p>
        </div>

        <div class="testimonail-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="testimonial-sliders">
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="{{ asset('assets/img/avaters/avatar1.png') }}" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Saira Hakim <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">
                                        "Amazing! Our PC Online is my go-to for gaming gear. Their selection is impressive,
                                        and they offer top-notch customer service. They helped me build my dream gaming rig
                                        within budget."
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="{{ asset('assets/img/avaters/avatar2.jpg') }}" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>David Niph <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">
                                        "The best place for PC parts! Our PC Online's expertise and selection exceeded my
                                        expectations. They're my first choice for quality components."
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="{{ asset('assets/img/avaters/avatar3.jpg') }}" alt="">
                                </div>

                                <div class="client-meta">
                                    <h3>Jacob Sikim <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">"Game-changer for content creators! Our PC Online offers a wide range of quality components at competitive prices. I upgraded my setup and couldn't be happier. Highly recommended!"</p>
                                    
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection