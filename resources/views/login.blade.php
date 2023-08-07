@extends('layout.frame_1')
@push('title')
    <title>Contact</title>
@endpush
<br>
<br>
<br>
<br>
<br>
<br>
@php
    // print_r($user);
@endphp
@section('content')
@php
    // print_r($user);
@endphp
    <div class="container w-50">
        @if(session()->has('status'))
        
        <h3 class="text-danger bg-dark">{{ session()->get('status') }}</h3>
            
        @endif
        <div class="contact-heading text-light d-flex justify-content-center h2 mt-3 font-weight-bold py-3"> Login Page</div>
       
        <form class="my-5" action="{{ url('/login/store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control py-4" placeholder="email">
            </div>
            <div class="form-group">
                <input type="password" name="pass" class="form-control py-4" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary border-dark w-100">SUBMIT</button>
        </form>
        <<a name=""  class="btn btn-primary" href="{{ url('/register') }}" >Register</a>

    </div>
@endsection




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
