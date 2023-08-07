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
        background: orange;
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
                                {{-- <div class="row"> --}}


                            
                                <form action="{{ url('/bookingseat') }}" method="POST">
                                    @csrf
                                    <div class="container offset-md-0">
                                        <div class="row p-3 ">
                                            <div class="col text-dark p-4 bg-light m-1 rounded">
                                                1<input type="checkbox" value="1" name="seat1"
                                                    @if ($seat->seat1 == 1) {{ "checked" . "  " . "class=mychk" }} @endif>
                                            </div>
                                            <div class="col text-dark p-4  bg-light m-1 rounded">
                                                2<input type="checkbox" value="1" name="seat2"
                                                    @if ($seat->seat2 == 1) {{ "checked" . "  " . "class=mychk" }} @endif>
                                            </div>
                                            <div class="col text-dark p-4  bg-light m-1 rounded">
                                                3<input type="checkbox" value="1" name="seat3"
                                                    @if ($seat->seat3 == 1) {{ "checked" . "  " . "class=mychk" }} @endif>
                                            </div>
                                            <div class="col text-dark p-4 bg-light m-1 rounded">
                                                4<input type="checkbox" value="1" name="seat4"
                                                    @if ($seat->seat4 == 1) {{ "checked" . "  " . "class=mychk" }} @endif>
                                            </div>
                                            <div class="col text-dark p-4 bg-light m-1 rounded">
                                                5<input type="checkbox" value="1" name="seat5"
                                                    @if ($seat->seat5 == 1) {{ "checked" . "  " . "class=mychk" }} @endif>
                                            </div>
                                        </div>
                                        <div class="row p-0 m-0">

                                            <div class="col text-dark p-4 bg-light m-1 rounded">
                                                6<input type="checkbox" value="1" name="seat6"
                                                    @if ($seat->seat6 == 1) {{ "checked" . "  " . "class=mychk" }} @endif>
                                            </div>
                                            <div class="col text-dark p-4 bg-light m-1 rounded">
                                                7<input type="checkbox" value="1" name="seat7"
                                                    @if ($seat->seat7 == 1) {{ "checked" . "  " . "class=mychk" }} @endif>
                                            </div>
                                            <div class="col text-dark p-4 bg-light m-1 rounded">
                                                8<input type="checkbox" value="1" name="seat8"
                                                    @if ($seat->seat8 == 1) {{ "checked" . "  " . "class=mychk" }} @endif>
                                            </div>
                                            <div class="col text-dark p-4 bg-light m-1 rounded">
                                                9<input type="checkbox" value="1" name="seat9"
                                                    @if ($seat->seat9 == 1) {{ "checked" . "  " . "class=mychk" }} @endif>
                                            </div>
                                            <div class="col text-dark p-4 bg-light m-1 rounded">
                                                10<input type="checkbox" value="1" name="seat10"
                                                    @if ($seat->seat10 == 1) {{ "checked" . "  " . "class=mychk"}} @endif>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit">submit</button>
                            </div>
                            </form>
                            
                            {{-- </div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection


<style>
    input[type="checkbox"]:checked{
        accent-color: #ccc;
    }
</style>

<script>



 var data =  document.getElementsByClassName("mychk");
 console.log(data);

 for(var i = 0 ; i < data.length ; i++){

    // document.getElementsByClassName("mychk")[i].style.accent-color = "red";

    }

</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
