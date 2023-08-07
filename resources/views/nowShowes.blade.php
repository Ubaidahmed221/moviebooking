@extends('layout.frame_1')
@push('title')
    <title>Home</title>
@endpush
@section('content')
    <div class="empty-space"></div>
    <!--Desktop Slider Start-->
    <div class="owl-carousel owl-theme desktop-slider mt-lg-5 pt-3">
        <div class="item">
            <a href="#">
                <img src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1678438352-10-03-2023-1.jpg') }}"
                    data-src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1678438352-10-03-2023-1.jpg') }}"
                    alt="Slide3 Background">
            </a>
            <!--<a href="javascript:;"></a> -->
        </div>
        <div class="item">
            <a href="#">
                <img src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1677938126-04-03-2023-1.jpg') }}"
                    data-src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1677938126-04-03-2023-1.jpg') }}"
                    alt="Slide3 Background">
            </a>
            <!--<a href="javascript:;"></a> -->
        </div>
        <div class="item">
            <a href="#">
                <img src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1677843940-03-03-2023-1.jpg') }}"
                    data-src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1677843940-03-03-2023-1.jpg') }}"
                    alt="Slide3 Background">
            </a>
            <!--<a href="javascript:;"></a> -->
        </div>
        <div class="item">
            <a href="#">
                <img src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1678451271-10-03-2023-1.jpg') }}"
                    data-src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1678451271-10-03-2023-1.jpg') }}"
                    alt="Slide3 Background">
            </a>
            <!--<a href="javascript:;"></a> -->
        </div>
        <div class="item">
            <a href="#">
                <img src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1674043528-18-01-2023-1.jpg') }}"
                    data-src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1674043528-18-01-2023-1.jpg') }}"
                    alt="Slide3 Background">
            </a>
            <!--<a href="javascript:;"></a> -->
        </div>
        <div class="item">
            <a href="#">
                <img src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1677657264-01-03-2023-1.jpg') }}"
                    data-src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1677657264-01-03-2023-1.jpg') }}"
                    alt="Slide3 Background">
            </a>
            <!--<a href="javascript:;"></a> -->
        </div>
        <div class="item">
            <a href="#">
                <img src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1675929466-09-02-2023-1.jpg') }}"
                    data-src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1675929466-09-02-2023-1.jpg') }}"
                    alt="Slide3 Background">
            </a>
            <!--<a href="javascript:;"></a> -->
        </div>
        <div class="item">
            <a href="#">
                <img src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1677074455-22-02-2023-1.jpg') }}"
                    data-src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1677074455-22-02-2023-1.jpg') }}"
                    alt="Slide3 Background">
            </a>
            <!--<a href="javascript:;"></a> -->
        </div>
    </div>
    <!--Desktop Slider End-->

    <!--Mobile Slider Start-->
    <div class="owl-carousel owl-theme mobile-carousel">
        <div class="item">


            <img src="web/Movies-temp/assets/uploads/slider/1678438352-10-03-2023-1.jpg"
                data-src="web/Movies-temp/assets/uploads/slider/1678438352-10-03-2023-1.jpg" alt="Slide3 Background">
            <a href="#"></a>

        </div>
        <div class="item">


            <img src="web/Movies-temp/assets/uploads/slider/1677938126-04-03-2023-1.jpg"
                data-src="web/Movies-temp/assets/uploads/slider/1677938126-04-03-2023-1.jpg" alt="Slide3 Background">
            <a href="#"></a>

        </div>
        <div class="item">


            <img src="web/Movies-temp/assets/uploads/slider/1677843940-03-03-2023-1.jpg"
                data-src="web/Movies-temp/assets/uploads/slider/1677843940-03-03-2023-1.jpg" alt="Slide3 Background">
            <a href="#"></a>

        </div>
        <div class="item">


            <img src="https://www.nueplex.com/assets/uploads/slider/1678451271-10-03-2023-1.jpg"
                data-src="https://www.nueplex.com/assets/uploads/slider/1678451271-10-03-2023-1.jpg"
                alt="Slide3 Background">
            <a href="#"></a>

        </div>
        <div class="item">


            <img src="https://www.nueplex.com/assets/uploads/slider/1674043528-18-01-2023-1.jpg"
                data-src="https://www.nueplex.com/assets/uploads/slider/1674043528-18-01-2023-1.jpg"
                alt="Slide3 Background">
            <a href="#"></a>

        </div>
        <div class="item">


            <img src="https://www.nueplex.com/assets/uploads/slider/1677657264-01-03-2023-1.jpg"
                data-src="https://www.nueplex.com/assets/uploads/slider/1677657264-01-03-2023-1.jpg"
                alt="Slide3 Background">
            <a href="#"></a>

        </div>
        <div class="item">


            <img src="https://www.nueplex.com/assets/uploads/slider/1675862867-08-02-2023-1.jpg"
                data-src="https://www.nueplex.com/assets/uploads/slider/1675862867-08-02-2023-1.jpg"
                alt="Slide3 Background">
            <a href="#"></a>

        </div>
        <div class="item">


            <img src="https://www.nueplex.com/assets/uploads/slider/1677074455-22-02-2023-1.jpg"
                data-src="https://www.nueplex.com/assets/uploads/slider/1677074455-22-02-2023-1.jpg"
                alt="Slide3 Background">
            <a href="#"></a>

        </div>

    </div>
    <!--Moble Slider End-->

    <div class="shows">
        <div class="row">

            <div class="medium-6 large-6 small-6 columns ">
                <p class="one"><a href="javascript:void(0);" id="showbtn" class="button active">NOW SHOWING</a>
                </p>
            </div>
            <div class="medium-6 large-6 small-6 columns ">
                <p class="two"><a href="javascript:void(0);" id="comingbtn" class="button">COMING SOON</a></p>
            </div>
        </div>
    </div>
    <div class="container" style="display:none;">
        <div class="movies animated fadeInUp target-two hidden" id="comingg">
            <div class="show-title-bg">
                <div class="left"><img src="https://www.nueplex.com/assets/web/images/movie-icon.png" alt=""
                        class="icon"> COMING SOON</div>
            </div>

            <div class="row-">
                <div class="">
                    <div class="owl-carousel" id="owl-demo2">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="movies animated fadeInUp target hidden container" id="showingg">

        <div class="show-title-bg">
            <div class="left"><img src="https://www.nueplex.com/assets/web/images/movie-icon.png" alt=""
                    class="icon">NOW SHOWING</div>
        </div>
        <div class="row" style="display:none;">
            <div class="small-11 small-centered columns">
                <div class="owl-carousel" id="owl-demo1">
                </div>
            </div>
        </div>
    </div>
    <br/>
    <!---Showing Now --------->
    <section class="container hidden" id="showing">
        <div class="grid-style">
            <div class="row">
                <div class="section-title">
                    <h3>NOW SHOWING</h3>
                </div>
            </div>
        </div>
    </section>
    <!-------Showing Now End-------->

    <!--Alam Code Start Coming Soon-->
    <section class="container hidden" id="coming">
        <div class="grid-style">
            <div class="row">
                <div class="section-title">
                    <h3>COMING SOON</h3>
                </div>
            </div>
        </div>

    </section>
    <div class="container">
        <div class="text-light h3 pt-5 pb-3 font-weight-bold">NOW SHOWING</div>
        <div class="row">
            <div class="col px-0">
                <div class="show-img-main">
                    <div class="hov-overlay">
                        <button class="hov-btn">MORE</button>
                    </div>
                    <img class="main-img" src="https://www.nueplex.com/assets/uploads/movie/1674892674-28-01-2023-1.jpg"
                        alt="">
                </div>
            </div>
            <div class="col px-0">
                <div class="show-img-main">
                    <div class="hov-overlay">
                        <button class="hov-btn">MORE</button>
                    </div>
                    <img src="https://www.nueplex.com/assets/uploads/movie/1671708788-22-12-2022-1.jpg" alt="">
                </div>
            </div>
            <div class="col px-0">
                <div class="show-img-main">
                    <div class="hov-overlay">
                        <button class="hov-btn">MORE</button>
                    </div>
                    <img src="https://www.nueplex.com/assets/uploads/movie/1674479627-23-01-2023-1.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col px-0">
                <div class="show-img-main">
                    <div class="hov-overlay">
                        <button class="hov-btn">MORE</button>
                    </div>
                    <img src="https://www.nueplex.com/assets/uploads/movie/1675951409-09-02-2023-1.jpg" alt="">
                </div>
            </div>
            <div class="col px-0">
                <div class="show-img-main">
                    <div class="hov-overlay">
                        <button class="hov-btn">MORE</button>
                    </div>
                    <img src="https://www.nueplex.com/assets/uploads/movie/1676554442-16-02-2023-1.jpg" alt="">
                </div>
            </div>
            <div class="col px-0">
                <div class="show-img-main">
                    <div class="hov-overlay">
                        <button class="hov-btn">MORE</button>
                    </div>
                    <img src="https://www.nueplex.com/assets/uploads/movie/1674479048-23-01-2023-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="show-time-bg">
            <div class="show-time container ">
                <div class="row">
                    <div class="small-12 small-centered columns ">
                        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-5">

                            <li class="">
                                <span class="show-time-icon"><i class="fa-solid fa-clock"></i> </span>
                                <span class="show-time-text">SHOW TIME</span>
                            </li>
                            <li class="">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle site-dropdown btn-block"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Select Site
                                    </button>
                                    <div class="dropdown-menu site-dropdown-menue" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item site-dropdown-itme" href="{{ './showes' }}">DHA</a>
                                        <a class="dropdown-item site-dropdown-itme" href="#">Askari</a>
                                    </div>
                                </div>
                            </li>

                            <li class="">

                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle site-dropdown btn-block"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        All Cinemas
                                    </button>
                                    <div class="dropdown-menu site-dropdown-menue" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item site-dropdown-itme" href="#">All Cinemas</a>
                                    </div>
                                </div>
                            </li>
                            </li>

                            <input type="hidden" name="city" id="City" value="1" />
                            <input type="hidden" name="area" id="Area" value="10" />
                            <li class="">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle site-dropdown btn-block"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        All Movies
                                    </button>
                                    <div class="dropdown-menu site-dropdown-menue" aria-labelledby="dropdownMenuButton"
                                        style="width:auto;">
                                        <a class="dropdown-item site-dropdown-itme" href="#">All Movies</a>
                                        <a class="dropdown-item site-dropdown-itme" href="#">Shazam! Fury of the
                                            Gods</a>
                                        <a class="dropdown-item site-dropdown-itme" href="#">What's Love Got to Do
                                            with It? (PG)</a>
                                        <a class="dropdown-item site-dropdown-itme" href="#">Ant-Man and the Wasp
                                            Quantumania (ENGLISH)</a>
                                        <a class="dropdown-item site-dropdown-itme" href="#">65</a>
                                        <a class="dropdown-item site-dropdown-itme" href="#">Creed III (PG)</a>
                                        <a class="dropdown-item site-dropdown-itme" href="#">Kingdom of the
                                            Dinosaurs</a>
                                        <a class="dropdown-item site-dropdown-itme" href="#">The Legend of Maula
                                            Jatt- Punjabi (PG)</a>
                                        <a class="dropdown-item site-dropdown-itme" href="#">Winnie-the-Pooh: Blood
                                            and Honey</a>
                                        <a class="dropdown-item site-dropdown-itme" href="#">Ant-Man and the Wasp:
                                            Quantumania (Urdu Dubbed)</a>
                                        <a class="dropdown-item site-dropdown-itme" href="#">Prey for the Devil
                                            (PG)</a>
                                        <a class="dropdown-item site-dropdown-itme" href="#">Tich Button
                                            (Pakistani)</a>
                                        <a class="dropdown-item site-dropdown-itme" href="#">Avatar: The Way of
                                            Water</a>
                                        <a class="dropdown-item site-dropdown-itme" href="#">Nightmare Radio: The
                                            Night Stalker</a>
                                    </div>
                                </div>
                            </li>

                            <li class="">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle site-dropdown btn-block"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Select Date
                                    </button>
                                    <div class="dropdown-menu site-dropdown-menue" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item site-dropdown-itme" href="#">Select Date</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="schedule home-page-shows">
                <div id="divLoading" style="width:100%;background-color:#FFF;text-align:center;display:none;"> <img
                        src="https://www.nueplex.com/logo/loading.gif" alt="" /> </div>
                <div class="container">
                    <div id="show" class="schedule"> </div>
                </div>
            </div>
            <div class="container">
                <div class="cinema-bar">
                    <p class="cinema-heading">CINEMA 1</p>
                </div>
                <div class="row">
                    <div class="col-md-3 px-0">
                        <div class="time-box">
                            <div class="show-time2 text-light">03:15 PM</div>
                            <p class="show-desc">WHAT'S LOVE GOT TO DO WITH IT? (PG)</p>
                            <div class="show-type text-light">Dightal 2D</div>
                            <div class="show-price text-light">Rs.1000</div>
                        </div>
                    </div>
                    <div class="col-md-3 px-0">
                        <div class="time-box">
                            <div class="show-time2 text-light">03:15 PM</div>
                            <p class="show-desc">WHAT'S LOVE GOT TO DO WITH IT? (PG)</p>
                            <div class="show-type text-light">Dightal 2D</div>
                            <div class="show-price text-light">Rs.1000</div>
                        </div>
                    </div>
                    <div class="col-md-3 px-0">
                        <div class="time-box">
                            <div class="show-time2 text-light">03:15 PM</div>
                            <p class="show-desc">WHAT'S LOVE GOT TO DO WITH IT? (PG)</p>
                            <div class="show-type text-light">Dightal 2D</div>
                            <div class="show-price text-light">Rs.1000</div>
                        </div>
                    </div>
                    <div class="col-md-3 px-0">
                        <div class="time-box">
                            <div class="show-time2 text-light">03:15 PM</div>
                            <p class="show-desc">WHAT'S LOVE GOT TO DO WITH IT? (PG)</p>
                            <div class="show-type text-light">Dightal 2D</div>
                            <div class="show-price text-light">Rs.1000</div>
                        </div>
                    </div>
                </div>
                <div class="cinema-bar">
                    <p class="cinema-heading">OPEN AIR CINEMA</p>
                </div>
                <div class="row">
                    <div class="col-md-3 px-0">
                        <div class="time-box">
                            <div class="show-time2 text-light">03:15 PM</div>
                            <p class="show-desc">WHAT'S LOVE GOT TO DO WITH IT? (PG)</p>
                            <div class="show-type text-light">Dightal 2D</div>
                            <div class="show-price text-light">Rs.1000</div>
                        </div>
                    </div>
                    <div class="col-md-3 px-0">
                        <div class="time-box">
                            <div class="show-time2 text-light">03:15 PM</div>
                            <p class="show-desc">WHAT'S LOVE GOT TO DO WITH IT? (PG)</p>
                            <div class="show-type text-light">Dightal 2D</div>
                            <div class="show-price text-light">Rs.1000</div>
                        </div>
                    </div>
                    <div class="col-md-3 px-0">
                        <div class="time-box">
                            <div class="show-time2 text-light">03:15 PM</div>
                            <p class="show-desc">WHAT'S LOVE GOT TO DO WITH IT? (PG)</p>
                            <div class="show-type text-light">Dightal 2D</div>
                            <div class="show-price text-light">Rs.1000</div>
                        </div>
                    </div>
                    <div class="col-md-3 px-0">
                        <div class="time-box">
                            <div class="show-time2 text-light">03:15 PM</div>
                            <p class="show-desc">WHAT'S LOVE GOT TO DO WITH IT? (PG)</p>
                            <div class="show-type text-light">Dightal 2D</div>
                            <div class="show-price text-light">Rs.1000</div>
                        </div>
                    </div>
                </div>
                <div class="cinema-bar">
                    <p class="cinema-heading">ROYAL CINEMA</p>
                </div>
                <div class="row">
                    <div class="col-md-3 px-0">
                        <div class="time-box">
                            <div class="show-time2 text-light">03:15 PM</div>
                            <p class="show-desc">WHAT'S LOVE GOT TO DO WITH IT? (PG)</p>
                            <div class="show-type text-light">Dightal 2D</div>
                            <div class="show-price text-light">Rs.1000</div>
                        </div>
                    </div>
                    <div class="col-md-3 px-0">
                        <div class="time-box">
                            <div class="show-time2 text-light">03:15 PM</div>
                            <p class="show-desc">WHAT'S LOVE GOT TO DO WITH IT? (PG)</p>
                            <div class="show-type text-light">Dightal 2D</div>
                            <div class="show-price text-light">Rs.1000</div>
                        </div>
                    </div>
                    <div class="col-md-3 px-0">
                        <div class="time-box">
                            <div class="show-time2 text-light">03:15 PM</div>
                            <p class="show-desc">WHAT'S LOVE GOT TO DO WITH IT? (PG)</p>
                            <div class="show-type text-light">Dightal 2D</div>
                            <div class="show-price text-light">Rs.1000</div>
                        </div>
                    </div>
                    <div class="col-md-3 px-0">
                        <div class="time-box">
                            <div class="show-time2 text-light">03:15 PM</div>
                            <p class="show-desc">WHAT'S LOVE GOT TO DO WITH IT? (PG)</p>
                            <div class="show-type text-light">Dightal 2D</div>
                            <div class="show-price text-light">Rs.1000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="experience">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h3>XFINITI EXPERIENCE</h3>
                </div>
            </div>
            {{-- --------- --}}
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="experience-img"><img
                            src="https://www.nueplex.com//assets/web/images/experience/nueplex-dha-facade.png"
                            class="img-fluid" /></div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="experience-img"><img
                            src="https://www.nueplex.com//assets/web/images/experience/Royal-Cinema.png"
                            class="img-fluid" /></div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="experience-img"><img
                            src="https://www.nueplex.com//assets/web/images/experience/open-air-cinema.png"
                            class="img-fluid" /></div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="experience-img"><img
                            src="https://www.nueplex.com//assets/web/images/experience/Asakri-cinema-hall.png"
                            class="img-fluid" /></div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="experience-img"><img
                            src="https://www.nueplex.com//assets/web/images/experience/askari-iv-cinema-lobby.png"
                            class="img-fluid" /></div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="experience-img"><img
                            src="https://www.nueplex.com//assets/web/images/experience/cinema-2.png" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Alam Code End-->

    <div id="myModal" class="lity-hide"
        style="overflow:auto;background:#fff;width:960px;max-width:100%;border-radius:6px"> </div>
    {{-- <script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" >
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
@endsection
