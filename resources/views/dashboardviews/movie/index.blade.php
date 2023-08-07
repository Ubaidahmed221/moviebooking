@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-5">Movie  List</h2>
 <div class="container-fluid mt-5">
    <div class="row offset-0">
        <div class="col-md-12">

            <table class="table">
                <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Movie  Name </th>
            <th scope="col">Movie Description </th>
            <th scope="col">Therather name </th>
            <th scope="col">Movie image </th>
            <th scope="col">Movie trailer </th>
            <th scope="col">Movie Start time</th>
            <th scope="col">Movie end time</th>
            <th scope="col">Movie Category</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mov as $item)
        <tr>
            <th scope="row">{{ $item->mid }}</th>
            <td>{{ $item->mtitle }}</td>
            <td>{{ $item->mdesc }}</td>
            <td>{{ $item->cname }}</td>
            <td><img src="/movieimg/{{ $item->mimg }}" width="60px" alt=""></td>
            <td><video src="/movietral/{{ $item->mvedio }}" width="80px" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" ></video>

                  <!-- Modal -->
                  <div class="modal fade w-100  " style="height: 100vh;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe src="/movietral/{{ $item->mvedio }}" class="m-auto d-block"  frameborder="0"></iframe>
                        </div>
                        
                      </div>
                    </div>
                  </div>
            </td>
            <td>{{ $item->mstart }}</td>
            <td>{{ $item->mend }}</td>
            <td>{{ $item->moviecatename }}</td>
            <td>
                <a href="{{ url('/dashboards/movie/edit') }}/{{ $item->mid }}" class="btn btn-primary">Edit</a>
                <a href="{{ url('/dashboards/movie/trash') }}/{{ $item->mid }}" class="btn btn-danger">Trash</a>  
           {{-- <a  onclick="myinfo({{$item->mid}})" class="btn btn-danger">Trash</a>  --}}
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>
</div>
</div>

<script>

    // function myinfo(id){
    //     $de =  confirm('Do you Went To Trash?')

    //     if($de == true){
          
    //         window.location.href = "/dashboards/movie/trash/" + id;

    //     }


    // }

</script>

    
@endsection