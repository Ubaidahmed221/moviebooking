@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-4">Add seats </h2>
 <div class="container-fluid mt-3">
    <div class="row  offset-2">
        <div class="col-md-10 ">
            <div class="bg-secondary rounded h-100 p-4">
                
                <form action="{{ url('/dashboards/seat/store') }}" enctype="multipart/form-data" method="post">
                    @csrf 
                    <div class="mb-3">
                        <label  class="form-label">seat1</label>
                        <select name="seat1" class="form-select">
                            <option value="" selected disabled>Select seat</option>
                            <option value="0" >0</option>
                            <option value="1" >1</option>
                          
                        </select>
                        @error('seat1')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">seat2</label>
                        <select name="seat2" class="form-select">
                            <option value="" selected disabled>Select seat</option>
                            <option value="0" >0</option>
                            <option value="1" >1</option>
                          
                        </select>
                        @error('seat1')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">seat3</label>
                        <select name="seat3" class="form-select">
                            <option value="" selected disabled>Select seat</option>
                            <option value="0" >0</option>
                            <option value="1" >1</option>
                          
                        </select>
                        @error('seat3')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">seat4</label>
                        <select name="seat4" class="form-select">
                            <option value="" selected disabled>Select seat</option>
                            <option value="0" >0</option>
                            <option value="1" >1</option>
                          
                        </select>
                        @error('seat4')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">seat5</label>
                        <select name="seat5" class="form-select">
                            <option value="" selected disabled>Select seat</option>
                            <option value="0" >0</option>
                            <option value="1" >1</option>
                          
                        </select>
                        @error('seat5')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">seat6</label>
                        <select name="seat6" class="form-select">
                            <option value="" selected disabled>Select seat</option>
                            <option value="0" >0</option>
                            <option value="1" >1</option>
                          
                        </select>
                        @error('seat6')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">seat7</label>
                        <select name="seat7" class="form-select">
                            <option value="" selected disabled>Select seat</option>
                            <option value="0" >0</option>
                            <option value="1" >1</option>
                          
                        </select>
                        @error('seat7')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">seat8</label>
                        <select name="seat8" class="form-select">
                            <option value="" selected disabled>Select seat</option>
                            <option value="0" >0</option>
                            <option value="1" >1</option>
                          
                        </select>
                        @error('seat8')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">seat9</label>
                        <select name="seat9" class="form-select">
                            <option value="" selected disabled>Select seat</option>
                            <option value="0" >0</option>
                            <option value="1" >1</option>
                          
                        </select>
                        @error('seat9')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">seat10</label>
                        <select name="seat10" class="form-select">
                            {{-- <option value="" selected >Select seat</option> --}}
                            <option value="0" >0</option>
                            <option value="1" >1</option>
                          
                        </select>
                        @error('seat10')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">client Name</label>
                        <select name="client" class="form-select">
                            <option value="" selected disabled>Select caregory</option>
                            @foreach ($client as $item)
                            <option value="{{ $item['cid'] }}">{{ $item['cname'] }}</option>   
                            @endforeach
                        </select>
                        @error('client')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">show Name</label>
                        <select name="show" class="form-select">
                            <option value="" selected disabled>select cinemas</option>
                            @foreach ($show as $item)
                            <option value="{{ $item['cid'] }}">{{ $item['cname'] }}</option>   
                            @endforeach
                        </select>
                        @error('show')
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