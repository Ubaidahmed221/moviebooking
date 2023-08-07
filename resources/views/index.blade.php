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
                    data-src="{{ url('Movies-temp/assets/uploads/slider/webSlider/1678438352-10-03-2023-1.jpg') }}"
                    alt="Slide3 Background">
            </a>
            <!--<a href="javascript:;"></a> -->
        </div>
        <div class="item">
            <a href="#">
                <img src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1677938126-04-03-2023-1.jpg') }}"
                    data-src="{{ url('Movies-temp/assets/uploads/slider/webSlider/1677938126-04-03-2023-1.jpg') }}"
                    alt="Slide3 Background">
            </a>
            <!--<a href="javascript:;"></a> -->
        </div>
        <div class="item">
            <a href="#">
                <img src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1677843940-03-03-2023-1.jpg') }}"
                    data-src="{{ url('Movies-temp/assets/uploads/slider/webSlider/1677843940-03-03-2023-1.jpg') }}"
                    alt="Slide3 Background">
            </a>
            <!--<a href="javascript:;"></a> -->
        </div>
        <div class="item">
            <a href="#">
                <img src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1678451271-10-03-2023-1.jpg') }}"
                    data-src="{{ url('Movies-temp/assets/uploads/slider/webSlider/1678451271-10-03-2023-1.jpg') }}"
                    alt="Slide3 Background">
            </a>
            <!--<a href="javascript:;"></a> -->
        </div>
        <div class="item">
            <a href="#">
                <img src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1674043528-18-01-2023-1.jpg') }}"
                    data-src="{{ url('Movies-temp/assets/uploads/slider/webSlider/1674043528-18-01-2023-1.jpg') }}"
                    alt="Slide3 Background">
            </a>
            <!--<a href="javascript:;"></a> -->
        </div>
        <div class="item">
            <a href="#">
                <img src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1677657264-01-03-2023-1.jpg') }}"
                    data-src="{{ url('Movies-temp/assets/uploads/slider/webSlider/1677657264-01-03-2023-1.jpg') }}"
                    alt="Slide3 Background">
            </a>
            <!--<a href="javascript:;"></a> -->
        </div>
        <div class="item">
            <a href="#">
                <img src="{{ url('web/Movies-temp/assets/uploads/slider/webSlider/1675929466-09-02-2023-1.jpg') }}"
                    data-src="{{ url('Movies-temp/assets/uploads/slider/webSlider/1675929466-09-02-2023-1.jpg') }}"
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


    <br />
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

            <!----- Dynamic------->
            <!-------Dynamic END----->

        </div>

    </section>

    <div class="">
        <div class="show-time-bg">
            <div class="show-time container ">
                <div class="row">
                    <div class="small-12 small-centered columns ">

                        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-5">
<div class="row">
    <div class="col-md-3">
        <li class="">
            <span class="show-time-icon"><i class="fa-solid fa-clock"></i></span>
            <span class="show-time-text">SHOW TIME</span>
        </li>
    </div>
    <div class="col-md-3">
        <form action="">
            <li class="">
            <div class="dropdown">
                <select name="cinemas" onchange="this.form.submit()" class="form-control p-2" id="">
                    <option value="">Select Cinmas</option>
                    @foreach ($mth as $item )
            <option  class="dropdown-item site-dropdown-itme" value="{{ $item->cid }}" 
                @if (session()->get('cinemas') == $item->cid)
                    {{ "selected" }}
                @endif
                >{{ $item->cname}}</option>

            @endforeach
        </select>
    </div>
</li>

</form>
    </div>
    <div class="col-md-3">
        <input type="hidden" name="city" id="City" value="1" />
        <input type="hidden" name="area" id="Area" value="10" />

        <form action="">
            
            <li class="">
                <div class="dropdown">
                    <select name="movie" class="form-control p-2" onchange="this.form.submit()">
                        <option value="">Select Movie</option>
        @foreach ($show as $item )
            <option  class="dropdown-item site-dropdown-itme" value="{{$item->stid}}" 
                @if (session()->get('movie') == $item->stid)
                            {{ "selected" }}
                        @endif
                        >{{ $item->mtitle}}</option>
                        
                        @endforeach
                        
                        
                    </select>
                </div>
            </li>
        </form>
    </div>
    
</div>
                           
    <div class="col-md-3">
                        
                     
                                <form action="{{ url('/settime') }}" method="POST">
                                    @csrf
                                <li class="">
                                    <div class="dropdown">
                                        <select name="date" required class="form-control p-2" id="">
                                        <option value="">Select Date</option>
                                        @foreach ($show as $item )
                                        <option  class="dropdown-item site-dropdown-itme"
                                         value="{{$item->show_date}}">{{$item->show_date}}</option>
                     
                                    @endforeach
                                </select>
                            </div>
                        </li>
                        <li class="">
                            <button type="submit" class="btn btn-sm py-0 text-white" style="height: 35px;">
                                Select Seat
                                </button>
                            </li>
                        </form>
    </div>
                        </ul>
    </div>
                </div>
            </div>

            {{-- <div class="schedule home-page-shows">
                <div id="divLoading" style="width:100%;background-color:#FFF;text-align:center;display:none;"> <img
                        src="https://www.nueplex.com/logo/loading.gif" alt="" /> </div>
                <div class="container">
                    <div id="show" class="schedule"> </div>
                </div>
            </div> --}}
    </div>
    <section class="experience">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h3>XFINITI EXPERIENCE</h3>
                </div>
            </div>
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
