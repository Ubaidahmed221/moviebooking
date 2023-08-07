@extends('layout.frame_1')
@push('title')
    <title>Register</title>
@endpush
<br><br><br><br><br><br>
@section('content')
    <div class="container w-50">
<div class="contact-heading text-light d-flex mt-5 justify-content-center h2 font-weight-bold py-3">Register Page</div>
      
        <form class="my-3" action="{{ url('/register/store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control py-4" name="fname" placeholder="First Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control py-4" name="email" placeholder="Email ">
            </div>
            <div class="form-group">
                <input type="password" class="form-control py-4" name="pass" placeholder="password">
            </div>
            <div class="form-group">
                <input type="number" class="form-control p-4" name="phone" placeholder="Phone">
            </div>
            <button type="submit" class="btn btn-primary border-dark w-100">SUBMIT</button>
        </form>
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
