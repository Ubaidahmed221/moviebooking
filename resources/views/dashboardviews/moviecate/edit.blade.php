@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-4">Edit Movie Categroy </h2>
 <div class="container-fluid mt-3">
    <div class="row  offset-2">
        <div class="col-md-10 ">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Basic Form</h6>
                <form action="{{ url('/dashboards/moviecate/update') }}/{{ $cat['mcid'] }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Movie Category Name</label>
                        <input type="text" class="form-control" name="mname" value="{{ $cat['moviecatename'] }}" >
                        @error('mname')
                        <p class="text-danger">{{ $message}}</p>
                            
                        @enderror
                        
                    </div>
                 
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>
    </div>
 </div>
 
    
@endsection