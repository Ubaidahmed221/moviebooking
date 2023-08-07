@extends('layout.frame_1')
@push('title')
    <title>Contact</title>
@endpush
<br><br><br><br><br><br>
@section('content')
    <div class="container">
        <div class="contact-heading text-light d-flex justify-content-center h4 font-weight-bold py-3"> GET IN TOUCH</div>
        <div class="map"><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115877.38996592448!2d66.89577181640627!3d24.82391279999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33db0add048e1%3A0x263e53c6b066d972!2sCinepax%20Cinema!5e0!3m2!1sen!2s!4v1678823993913!5m2!1sen!2s"
                width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <form class="my-5">
            <div class="form-group">
                <input type="email" class="form-control py-4" placeholder="First Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control py-4" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control py-4" placeholder="Email Address">
            </div>
            <div class="form-group">
                <input type="text" class="form-control p-4" placeholder="Phone">
            </div>
            <textarea name="" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
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
