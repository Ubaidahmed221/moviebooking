<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <style>
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta charset="utf-8" />
    <meta name="theme-color" content="#e81723">

    <meta name="keywords"
        content="cinema, movie, nueplex, Nueplex, ticket, cinema in karachi, 3D cinema, online booking, new movie, 
              movies, showtime, ocean mall, defense cinema, nueplex cinema, 2D movie, online movie ticket, ticket booking, nueplex movie timing,
              cinema showtime, indian new movie, indian movie, bollywood new movie, bollywood movies" />
    <meta name="description"
        content="Welcome to Nueplex Cinema for the best experiance in movies viewing and online reservation. NuePlex Cinema provides cinema veiwing equipped with superior quality international ambience and best service standards to ensure customer delight and unmatched cinama viewing experiance.">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    {{-- <meta property="og:image" content="/images/nueplex-logo-fb.jpg" /> --}}
    @stack('title')
    <link href="{{ url('Movies-temp/assets/images/favicon.ico') }}" type="image/x-icon" rel="icon">
    <link href="{{ url('Movies-temp/assets/images/favicon.ico') }}" type="image/x-icon" rel="shortcut icon">
    <link rel="image_src" href="{{ url('Movies-temp/assets/web/images/nueplex-logo.html') }}">

    <link rel="preconnect" href="{{ url('Movies-temp/https://fonts.gstatic.com') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/bootstrap/css/bootstrap.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/foundation.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/jquery-ui.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/font-awesome.min.css') }}">
    <!--<link href="assets/" rel="stylesheet">-->
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/icofont/icofont.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/boxicons/css/boxicons.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/fonts.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/owl.carousel.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/owl.theme.default.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/responsiveslides.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/sliderDetails.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/app.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/custom-style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/rwd.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/animate.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/awesomplete.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ '/Movies-temp/assets/web/css/mystyle.css' }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--new style  -->
    <!-- slider JS files -->

    <!-- Base MasterSlider style sheet -->
    <link type="text/css" rel="stylesheet"
        href="{{ url('Movies-temp/assets/web/css/masterslider/style/masterslider.css') }}">
    <link type="text/css" rel="stylesheet"
        href="{{ url('Movies-temp/assets/web/css/masterslider/skins/metro/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/masterslider/style/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('Movies-temp/assets/web/css/lity.min.css') }}">
    <!-- jQuery -->
</head>
<style>
    .nav-ul {
        display: block;
        justify-content: center;
    }

    .logo-brand {
        display: flex;
        justify-content: center;
    }
</style>

<body class="home">
    <div class="visible-xs visible-sm visible-md  m-ticket-info">

    </div>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center logo-brand ">

            <a href="{{ '/' }}" class="logo d-flex justify-content-center"id="logo"><img
                    src="{{ url('https://www.dreamworks.com/storage/cms-uploads/xfinity-may22.png') }}"
                    alt=""></a>
        </div>
        <nav class="nav-menu d-none d-lg-block" id="nav-ul">
            <ul class="nav-ul">
                <li><a href="{{ '/news' }}">Nue News</a></li>
                <li><a href="#">Tickets Info</a></li>
                <li><a href="#">Private Screening</a></li>
                <li><a href="{{ '/aboutus' }}">About Us</a></li>
                <li><a href="{{ '/contact' }}">Contact Us</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')


    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-contact">
                        <div class="footer-logo">
                            <img src="https://www.dreamworks.com/storage/cms-uploads/xfinity-may22.png" alt="Logo"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4 footer-links">
                        <h4></h4>
                        <ul>
                            <li><a href="https://www.nueplex.com/news.html">Nue News</a></li>
                            <li><a href="https://www.nueplex.com/ticket.html">Tickets Info</a></li>
                            <li><a href="https://www.nueplex.com/contact.html">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 footer-links">
                        <div class="social-links mt-3">
                            <h4>STAY IN TOUCH</h4>
                            <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-outer">
            <div class="container">
                <div class="copyright">
                    © Copyright 2022 Nue Multiplex &amp; Entertainment Square Co. Pvt Ltd. All Rights Reserved. Powered
                    {{-- <a href="http://synageglobal.com/" target="_blank">    <img src="https://www.nueplex.com//assets/web/images/synagelogo.png" class="img-fluid"></a> --}}
                </div>
            </div>
        </div>
    </footer>

    <footer id="footer" class="hidden">
        <div class="row">
            <div class="medium-3 columns ">
                <small class="copyright">
                    &copy; 2021 Nue Multiplex & Entertainment Square Co. Pvt Ltd.<br>All rights reserved
                </small>

            </div>
            <div class="medium-3 columns ">
                <div class="footer_social ">
                    <ul>
                        <li>
                            <ul>
                                <li><a target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>

                                <li><a target="_blank" href=""></a>

                                <li><a target="_blank" href=""></a></li>
                                <!--<li><a target="_blank" href=""><i><img src="https://www.nueplex.com/assets/web/images/googlepluslogo.png" class="img-circle social" alt="google-plue"></i>&nbsp;</a></li>
                                        -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="medium-2 columns">
                <a href="https://web.appstore.com" target="_blank" class="play"
                    style="padding:12px 0; height:50px ;width:124px;  margin:0 auto">
                    <img src="https://www.nueplex.com/assets/uploads/logo/appstore.svg" alt="" />
                </a>
            </div>
            <div class="medium-2 columns">
                <a href="https://web.playstore.com" target="_blank" class="play"
                    style="padding:10px 0; height:50px ;width:124px; margin:0 auto">
                    <img src="https://www.nueplex.com/assets/uploads/logo/playstore.svg" alt="" />
                </a>
            </div>
            <div class="medium-2 columns ">

                <small class="copyright">
                    <a href="https://www.synageglobal.com/"><img
                            src="https://www.nueplex.com/assets/web/images/synage-logo.png" width="100px"
                            class="" alt="Synag Global"></a>
                </small>
            </div>
        </div>
    </footer>
    <script src="{{ url('Movies-temp/assets/web/js/AnimOnScroll.js') }}"></script>
    <script src="{{ url('Movies-temp/assets/web/js/foundation.min.js') }}"></script>
    <script src="{{ url('Movies-temp/assets/web/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('Movies-temp/assets/web/js/jquery.equalizer.min.js') }}"></script>
    <script src="{{ url('Movies-temp/assets/web/js/jquery-ui.min.js') }}"></script>
    <script src="{{ url('Movies-temp/assets/web/js/responsiveslides.js') }}"></script>
    <script src="{{ url('Movies-temp/assets/web/js/app.js') }}"></script>
    <script src="{{ url('Movies-temp/assets/web/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('Movies-temp/ajax/libs/jquery/1.11.3/jquery.min.js') }}">
        < script type = "text/javascript"
        src = "{{ url('Movies-temp/assets/web/js/vendor/modernizr.js') }}" >
    </script>
    <script type="text/javascript" src="{{ url('Movies-temp/assets/web/js/masterslider/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('Movies-temp/assets/web/js/masterslider/masterslider.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('Movies-temp/assets/web/js/awesomplete.js') }}"></script>
    <script type="text/javascript" src="{{ url('Movies-temp/assets/web/js/lity.min.js') }}"></script>
    <script type="text/javascript" src="{{ 'Movies-temp/assets/web/js/myjs.js' }}"></script>
</body>

</html>
