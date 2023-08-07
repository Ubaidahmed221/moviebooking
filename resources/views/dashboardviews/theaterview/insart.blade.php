@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-4">Add Cinemas</h2>
 <div class="container-fluid mt-3">
    <div class="row  offset-2">
        <div class="col-md-10 ">
            <div class="bg-secondary rounded h-100 p-4">
                
                <form action="{{ url('/dashboards/theater/store') }}"  method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Cinemas Name</label>
                        <input type="text" class="form-control" name="tname" value="{{ old('tname') }}"  >
                        @error('tname')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label  class="form-label">Cinemas Address</label>
                        <input type="text" class="form-control" value="{{ old('caddres') }}"  name="caddres">
                        @error('caddres')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Cinemas image</label>
                        <input type="file" class="form-control" value="{{ old('cimgs') }}"  name="cimgs">
                        @error('cimgs')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Cinemas phone no</label>
                        <input type="number" class="form-control" name="tprice" value="{{ old('tprice') }}"  >
                        @error('tprice')
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