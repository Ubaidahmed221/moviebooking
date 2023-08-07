@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-4">Edit Boooking </h2>
 <div class="container-fluid mt-3">
    <div class="row  offset-2">
        <div class="col-md-10 ">
            <div class="bg-secondary rounded h-100 p-4">
                
                <form action="{{ url('/dashboards/mbooking/update') }}/{{ $edbook['bookid'] }}" enctype="multipart/form-data" method="post">
                    @csrf 
                    <div class="mb-3">
                        <label  class="form-label">Client Name</label>
                        <select name="mshow" class="form-select">
                            <option value="" selected disabled>Select caregory</option>
                            @foreach ($client as $item)
                            <option value="{{ $item['cid'] }}"
                            @if ($item['cid'] == $edbook['cid'] )
                            {{ "selected" }}
                                
                            @endif
                            >{{ $item['cname'] }}</option>   
                            @endforeach
                        </select>
                        @error('mshow')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Show Name</label>
                        <select name="cshow" class="form-select">
                            <option value="" selected disabled>Select caregory</option>
                            @foreach ($show as $item)
                            <option value="{{ $item['stid'] }}"
                            @if ($item['stid'] == $edbook['stid'])
                            {{ "selected" }}
                                
                            @endif
                            >{{ $item['show_name'] }}</option>   
                            @endforeach
                        </select>
                        @error('cshow')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Booking Serial number</label>
              <input type="number" class="form-control" value="{{ $edbook['serialnum'] }}"  name="bser">
                        @error('bser')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label  class="form-label">Show Price</label>
                       <input type="number" class="form-control" value="{{ $edbook['tprice'] }}"  name="shpric">
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