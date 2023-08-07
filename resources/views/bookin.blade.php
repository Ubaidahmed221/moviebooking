@extends('layout.frame_1')
@push('title')
    <title>seat</title>
@endpush
<br><br><br><br><br><br>
<style>
    .seat-main {
        width: 500px;
        height: auto;
        background: #fff;
    }

    .desc {
        margin: 100px
    }

    .key {
        padding: 3px
    }

    .book-btn {
        margin-top: 35px;
        width: 135px;
        height: 45px;
        background:orange ;
    }
</style>
@section('content')

<div class="container">
    <div class="contact-heading text-light d-flex justify-content-center h4 font-weight-bold py-3"> MOVIE BOOKNG WIDGET
    </div>
    <div class="row">

        <div class="seat-main mb-5 col-12 col-sm-12 ">
            <div class="h-2 text-white border text-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col text-dark py-4">
                            <div class="seat-heading w-100 bg-danger py-3 mb-5 text-light">SCREEN</div>
                                
                               
                                <form action="{{ url('/tickbook/store') }}" method="POST">

                                    @csrf
                              
                                    <div class="col text-dark">
                                        <div class="desc">
                                            <div class="row justify-content-start text-start">
                                                <div class="col key">Movie</div>
                                                <div class="col" >: <input type="text" name="" value="{{ $movie[0]->mtitle }}">  </div>
                                            </div>
                                            <div class="row justify-content-start text-start">
                                                <div class="col key">Date</div>
                                                <div class="col">: {{ session()->get('date') }}</div>
                                            </div>
                                            <div class="row justify-content-start text-start">
                                                <div class="col key">Cinemas</div>
                                                <div class="col">: {{ $cinemas[0]->cname }}</div>
                                            </div>
                                           
                                            <div class="row justify-content-start text-start">
                                                <div class="col key">Total</div>
                                                <div class="col">{{$count}}</div>
                                            </div>
                                           
                                            
                                            <button type="submit" onclick="myinf()">submit</button>
                                        </form>  
                                    </div>
                                </div>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- <script>
    function myinf(){
        alert('Movie Ticket Successfully');
        window.location.href = '/';
    }
</script> --}}


       

 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
