<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Medical Trading</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/venobox/venobox.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @yield('style')
    <!-- =======================================================
  * Template Name: eBusiness - v2.2.1
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <a href="{{ route('home') }}">
                    <div class="mx-2">

                        {{-- <div class="float-left" style="width: 35px;height: 40px;">
                            <img style="width: 35px;height: 40;" src="{{ asset('assets/img/logo.png') }}"
                                alt="" class="" data-holder-rendered="true">
                        </div> --}}
                        <p class="float-left">
                            <span style="font-weight: bold;" class="logoname pl-3">Medical Trading</span>
                            <br>
                            <span class="pl-3 logoname-sub"> GENERAL TRADING CO.,LTD</span>
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </a>

                {{-- <div class="logoframe">
                    <img class="" src="{{asset('assets/img/logo.png')}}" alt="">
                </div>
                <h1 class="text-light"><a href="index.html"><span>7</span>Diamond</a></h1> --}}

                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active home-active"><a href="{{ route('home') }}">HOME</a></li>
                    <li class="products-active"><a href="{{ route('product_page') }}">PRODUCTS</a></li>
                    {{-- <li class="about-active"><a href="{{ route('about') }}">ABOUT</a></li> --}}
                    {{-- <li class="blog-active"><a href="{{ url('postui') }}">BLOGS</a></li> --}}
                    <li class="contact-active"><a href="{{ route('contact') }}">CONTACT</a></li>
                    <li class="blog-active"><a href="/admin">Admin</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    @yield('content')
    <!-- ======= Slider Section ======= -->




    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footercontent">
                            <img src="{{ asset('assets/img/location.png') }}" alt="">
                            <p>No.11, Tamwe Township, Yangon Division, Myanmar</p>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footercontent">
                            <img src="{{ asset('assets/img/email.png') }}" alt="">
                            <p>contactemail@gmail.com</p>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footercontent">
                            <a href="">
                                <img src="{{ asset('assets/img/facebook.png') }}" alt="">
                                <p>www.facebook.com/medicalwebsite</p>
                            </a>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footercontent">
                            <img src="{{ asset('assets/img/phon.png') }}" alt="">
                            <p>(95) 9 3444444444, (95) 9 4555555555</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/plugins/appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/plugins/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('assets/plugins/parallax/parallax.js') }}"></script>
    <script src="{{ asset('assets/plugins/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('assets/plugins/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/venobox/venobox.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


    @yield('js')
</body>

</html>
