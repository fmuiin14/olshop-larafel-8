<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mumu Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/fe/img/favicon.ico')}}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('/fe/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/fe/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('/fe/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('/fe/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ url('/fe/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('/fe/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('/fe/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ url('/fe/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('/fe/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('/fe/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('/fe/css/style.css') }}">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{url('/fe/img/logo/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    @include('components.frontend.header')

    <main>

        @yield('content')


        <!-- Shop Method Start-->
        <div class="shop-method-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-package"></i>
                            <h6>Free Shipping Method</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-unlock"></i>
                            <h6>Secure Payment System</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-reload"></i>
                            <h6>Secure Payment System</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
        <!-- Gallery Start-->
        <div class="gallery-wrapper lf-padding">
            <div class="gallery-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="gallery-items">
                            <img src="{{url('/fe/img/gallery/gallery1.jpg')}}" alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="{{url('/fe/img/gallery/gallery2.jpg')}}" alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="{{ url('/fe/img/gallery/gallery3.jpg') }}" alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="{{url('/fe/img/gallery/gallery4.jpg')}}" alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="{{url('/fe/img/gallery/gallery5.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End-->

    </main>
    <footer>

        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{url('/fe/img/logo/logo2_footer.png')}}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod
                                            tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#"> Offers & Discounts</a></li>
                                    <li><a href="#"> Get Coupon</a></li>
                                    <li><a href="#"> Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>New Products</h4>
                                <ul>
                                    <li><a href="#">Woman Cloth</a></li>
                                    <li><a href="#">Fashion Accessories</a></li>
                                    <li><a href="#"> Man Accessories</a></li>
                                    <li><a href="#"> Rubber made Toys</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href="#">Frequently Asked Questions</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Report a Payment Issue</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="footer-copy-right">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="footer-copy-right f-right">
                            <!-- social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->

    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ url('/fe/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{url('/fe/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{url('/fe/js/popper.min.js')}}"></script>
    <script src="{{url('/fe/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{url('/fe/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{url('/fe/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('/fe/js/slick.min.js')}}"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="{{url('/fe/js/wow.min.js')}}"></script>
    <script src="{{url('/fe/js/animated.headline.js')}}"></script>
    <script src="{{url('/fe/js/jquery.magnific-popup.js')}}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{url('/fe/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{url('/fe/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ url('/fe/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{url('/fe/js/contact.js')}}"></script>
    <script src="{{url('/fe/js/jquery.form.js')}}"></script>
    <script src="{{url('/fe/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('/fe/js/mail-script.js')}}"></script>
    <script src="{{url('/fe/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{url('/fe/js/plugins.js')}}"></script>
    <script src="{{url('/fe/js/main.js')}}"></script>

</body>

</html>
