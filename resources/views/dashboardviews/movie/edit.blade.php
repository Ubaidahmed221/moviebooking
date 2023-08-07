@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-4">Add Movie </h2>
 <div class="container-fluid mt-3">
    <div class="row  offset-2">
        <div class="col-md-10 ">
            <div class="bg-secondary rounded h-100 p-4">
                
                <form action="{{ url('/dashboards/movie/update') }}/{{ $edi->mid }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Movie Name</label>
     <input type="text" class="form-control" name="mname" value="{{ $edi->mtitle }}"  >
                        @error('mname')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Movie description</label>
          <textarea name="mdes" class="form-control" rows="4">{{ $edi->mdesc }}</textarea>
                        @error('mdes')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Therather name</label>
                        <select name="mtherather" class="form-select">
                            <option value="" selected disabled>Select therather</option>
                            @foreach ($cinams as $item)
                            <option value="{{ $item['cid'] }}"
                            @if ($edi['cid'] == $item['cid'])
                            {{ "selected" }}
                                
                            @endif
                            >{{ $item['cname'] }}</option>   
                            @endforeach
                        </select>
                        @error('mtherather')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Movie image</label>
                       <input type="file" class="form-control"  name="mimg">
                       <br>
                       <img src="/movieimg/{{ $edi->mimg }}" alt="" width="50px">
                       <input type="hidden" value="{{ $edi->mimg  }}" name="oldimg">
                        @error('mimg')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Movie Trailer</label>
                       <input type="file" class="form-control"  name="mvedio">
                       <br>
                       <iframe src="/movietral/{{ $edi->mvedio }}" width="80px" height="80px" ></iframe>
                       <input type="hidden" value="{{ $edi->mvedio }}" name="oldvedio">
                        @error('mvedio')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Movie Start Time</label>
      <input type="datetime-local" class="form-control" value="{{ $edi->mstart }}"  name="mstart">
                        @error('mstart')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Movie End Time</label>
           <input type="datetime-local" class="form-control" value="{{ $edi->mend }}"  name="mend">
                        @error('mend')
                        <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Movie Category</label>
                        <select name="mcat" class="form-select">
                            <option value="" selected disabled>Select caregory</option>
                            @foreach ($mcat as $item)
                            <option value="{{ $item['mcid'] }}"
                            @if ($edi['mcid'] == $item['mcid'])
                            {{ "selected" }}
                                
                            @endif
                            >{{ $item['moviecatename'] }}</option>   
                            @endforeach
                        </select>
                        @error('mcat')
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