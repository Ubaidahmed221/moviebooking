@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-4">Add Movie Categroy </h2>
 <div class="container-fluid mt-3">
    <div class="row  offset-2">
        <div class="col-md-10 ">
            <div class="bg-secondary rounded h-100 p-4">
                <form action="{{ url('/dashboards/moviecate/store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Movie Category Name</label>
                        <input type="text" class="form-control" name="mname"  >
                        @error('mname')
                        <p class="text-danger">{{ $message}}</p>

                        @enderror

                    </div>
                    <button type="submit" class="btn btn-primary">Insart</button>
                </form>
            </div>
        </div>
    </div>
 </div>


@endsection
