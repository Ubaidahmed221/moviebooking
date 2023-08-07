@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-4">Add Movie </h2>
 <div class="container-fluid mt-3">
    <div class="row  offset-2">
        <div class="col-md-10 ">
            <div class="bg-secondary rounded h-100 p-4">
                
                <form action="{{ url('/dashboards/showtime/update') }}/{{ $shw['stid'] }}" enctype="multipart/form-data" method="post">
                    @csrf 
                    <div class="mb-3">
                        <label  class="form-label">Movie Name</label>
                        <select name="mshow" class="form-select">
                            <option value="" selected disabled>Select caregory</option>
                            @foreach ($move as $item)
                            <option value="{{ $item['mid'] }}"
                            @if ($shw['mid'] == $item['mid'])
                            {{ "selected" }}
                                
                            @endif
                            
                            >{{ $item['mtitle'] }}</option>   
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
                            @foreach ($cine as $item)
                            <option value="{{ $item['cid'] }}"
                            @if ($shw['cid'] == $item['cid'])
                            {{ "selected" }}
                            @endif
                            >{{ $item['cname'] }}</option>   
                            @endforeach
                        </select>
                        @error('cshow')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label  class="form-label">Show Start Time</label>
           <input type="time" class="form-control" value="{{ $shw['Starttime'] }}"  name="ststart">
                        @error('ststart')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Show End Time</label>
           <input type="time" class="form-control" value="{{ $shw['endtime'] }}"  name="stend">
                        @error('stend')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">show date</label>
           <input type="date" class="form-control" value="{{ $shw['show_date'] }}"  name="sdate">
                        @error('sdate')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Show Price</label>
                       <input type="number" class="form-control" value="{{ $shw['price'] }}"  name="shpric">
                        @error('shpric')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                 
                 
                    <button type="submit" class="btn btn-primary">Insart</button>
                </form>            </div>
        </div>
    </div>
 </div>
 
    
@endsection