@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-4">Edit Client </h2>
 <div class="container-fluid mt-3">
    <div class="row  offset-2">
        <div class="col-md-10 ">
            <div class="bg-secondary rounded h-100 p-4">
                
                <form action="{{ url('/dashboards/client/update') }}/{{ $cli['cid'] }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Client Name</label>
                        <input type="text" class="form-control" name="cname" value="{{ $cli['cname'] }}"  >
                        @error('cname')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Client Email</label>
                        <input type="email" class="form-control" value="{{ $cli['email'] }}" name="cemail"  >
                        @error('cemail')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Client Password</label>
                        <input type="password" class="form-control" value="{{ $cli['password'] }}"  name="cpass"  >
                        @error('cpass')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Client Phone</label>
                        <input type="number" class="form-control" value="{{ $cli['phone'] }}"  name="cphone"  >
                        @error('cphone')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Client Address</label>
                        <input type="text" class="form-control" name="caddres" value="{{ $cli['address'] }}" >
                        @error('caddres')
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