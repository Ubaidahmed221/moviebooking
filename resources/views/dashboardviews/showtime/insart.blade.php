@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-4">Add Show Time </h2>
 <div class="container-fluid mt-3">
    <div class="row  offset-2">
        <div class="col-md-10 ">
            <div class="bg-secondary rounded h-100 p-4">
                
                <form action="{{ url('/dashboards/showtime/store') }}" enctype="multipart/form-data" method="post">
                    @csrf 
                    <div class="mb-3">
                        <label  class="form-label">Show Name</label>
                       <input type="text" class="form-control" value="{{ old('sname') }}"  name="sname">
                        @error('sname')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Movie Name</label>
                        <select name="mshow" class="form-select">
                            <option value="" selected disabled>Select caregory</option>
                            @foreach ($mov as $item)
                            <option value="{{ $item['mid'] }}">{{ $item['mtitle'] }}</option>   
                            @endforeach
                        </select>
                        @error('mshow')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Canemas Name</label>
                        <select name="cshow" class="form-select">
                            <option value="" selected disabled>Select caregory</option>
                            @foreach ($cin as $item)
                            <option value="{{ $item['cid'] }}">{{ $item['cname'] }}</option>   
                            @endforeach
                        </select>
                        @error('cshow')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                   
                   
                    <div class="mb-3">
                        <label  class="form-label">Show Start Time</label>
                       <input type="time" class="form-control" value="{{ old('ststart') }}"  name="ststart">
                        @error('ststart')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Show End Time</label>
                       <input type="time" class="form-control" value="{{ old('stend') }}"  name="stend">
                        @error('stend')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">show date</label>
           <input type="date" class="form-control" value="{{ old('sdate') }}"  name="sdate">
                        @error('sdate')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Show Price</label>
                       <input type="number" class="form-control" value="{{ old('shpric') }}"  name="shpric">
                        @error('shpric')
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