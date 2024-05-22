@yield('static')
<!-- header -->
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel E-Commerce Project by Sam">
          
    <!-- title -->
    <title>Laravel E-Commerce</title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-oCE8e1v6qAqzYT9py4uKti9bAJ2IYoaBdMuXuXtv3AvHOHMQeC6d6gezg67uC3P1" crossorigin="anonymous">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Products/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Icons Section -->
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- Animation Section -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Products/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Products/vendor/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Products/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Products/css/util.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/Products/css/style.css') }}">
</head>

<body>


{{-- <!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div>
<!--PreLoader Ends--> --}}

{{-- Navbar --}}
<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-3">
                <!-- logo -->
                <div class="site-logo">
                    <a href="{{ route('welcome') }}">
                        <img src="assets/img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <!-- menu start -->
                <nav class="main-menu">
                    <ul>
                        <li class="current-list-item"><a href="{{ route('welcome') }}">Home</a></li>
                        <!-- navbar -->
                        <li><a href="{{ route('shop') }}">Shop</a></li>
                        <li><a href="{{ route('news') }}">News</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <!-- Cart and Search icons -->
                    </ul>
                </nav>
            </div>

            <!-- menu end -->
            <div class="col-lg-3 col-md-3">
                <!-- Login Button -->
                <div class="button-container">
                    <a href="{{ route('login') }}">
                        <button class="Btn" style="color: #f28123">
                            <div class="sign">
                                <svg viewBox="0 0 512 512">
                                    <path 
                                    d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z">
                                    </path>
                                </svg>
                            </div>
                            <div class="text">Login</div>
                        </button>
                    </a>
                </div>

                <li class="header-icons">
                    <a class="shopping-cart" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a>
                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                </li>
                <!-- End Login Button -->
            </div>
        </div>
    </div>
</div>


<div class="section-title" style="margin-top: 30px;">
    <h3><span class="orange-text">Our</span> Partners</h3>
    <p>"Explore our collaborations with leading computer companies such as Alienware, Nvidia, Asus, Lian Li, and more. Discover top-quality components and products!"</p>
</div>

<!-- logo carousel -->
<div class="logo-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-carousel-inner">
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/alienware.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/Nvidia.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/asus.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/lian li.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/logo.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/Intel.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/Sony.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/Logitech.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Logo Carousel -->

<!-- footer -->
<footer id="dk-footer" class="dk-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="footer_logo" class="img-fluid">
                        </a>
                        <p class="footer-info-text" style="color: white">
                            At Med Tech, we're your tech partner, offering the latest in PC components and hardware
                        </p>
                        <div class="footer-social-link">
                            <h3>Follow us</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fas fa-map-o" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>Cairo , Egypt</h3>
                                    <p style="color: white">Visit Us</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fas fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info" >
                                    <h3>01234567890</h3>
                                    <p style="color: white"> Give us a call</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading" style="color: white">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="{{ route('welcome') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('shop') }}">Shop</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact us</a>
                                        
                                    </li>

                                    <li>
                                        <a href="{{ route('news') }}">News</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>Subscribe</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <p style="color: white">
                                    Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                                <form action="#">
                                    <div class="form-row">
                                        <div class="col dk-footer-form">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                            <button type="submit">
                                                <i class="far fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2023, All Right Reserved </span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div> 
        <!-- End Copyright -->
        
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
            <button class="btn btn-dark" title="Back to Top" style="display: block;">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>
        <!-- End Back to top -->
</footer>

<!-- jquery -->
<script src="assets/js/jquery-1.11.3.min.js"></script>
<!-- bootstrap -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- count down -->
<script src="assets/js/jquery.countdown.js"></script>
<!-- isotope -->
<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
<!-- waypoints -->
<script src="assets/js/waypoints.js"></script>
<!-- owl carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- mean menu -->
<script src="assets/js/jquery.meanmenu.min.js"></script>
<!-- sticker js -->
<script src="assets/js/sticker.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('assets/Products/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/Products/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/Products/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/Products/js/main1.js') }}"></script>


<div id="dropDownSelect2"></div>
            <!-- slider -->
<script type="text/javascript" src="{{ asset('assets/Products/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/Products/vendor/animsition/js/animsition.min.js') }}"></script> 
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function () {
        // Show or hide the button based on scroll position
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });

        // Scroll to the top when the button is clicked
        $('#back-to-top').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 800);
            return false;
        });
    });
</script>
<script src="{{ asset('assets/Products/js/main.js') }} "></script> 
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8239d14a7c060daf","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

</html>