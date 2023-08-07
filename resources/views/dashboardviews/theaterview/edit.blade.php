@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-4">Edit Cinemas </h2>
 <div class="container-fluid mt-3">
    <div class="row  offset-2">
        <div class="col-md-10 ">
            <div class="bg-secondary rounded h-100 p-4">
                
                <form action="{{ url('/dashboards/theater/update') }}/{{ $mthe['cid'] }}" enctype="multipart/form-data"  method="post" >

                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Cinemas Name</label>
                        <input type="text" class="form-control" name="tname" value="{{ $mthe['cname'] }}"  >
                        @error('tname')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label  class="form-label">Cinemas Address</label>
                        <input type="text" class="form-control" value="{{ $mthe['caddres'] }}"  name="caddres">
                        @error('caddres')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Cinemas image</label>
                        <input type="file" class="form-control"  name="cimgs">
                        <input type="hidden" value="{{ $mthe['cimg'] }}" name="oldimg">
                        <br>
                        <img src="/cinemasimg/{{ $mthe['cimg']  }}" width="60px" alt="">
                        @error('cimg')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Cinemas phone no</label>
       <input type="number" class="form-control" name="tprice" value="{{ $mthe['cphone'] }}"  >
                        @error('tprice')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
 </div>
 
    
@endsection