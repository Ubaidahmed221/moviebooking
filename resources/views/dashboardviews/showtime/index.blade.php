@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-5">Show Times List</h2>
 <div class="container-fluid mt-5">
    <div class="row offset-0">
        <div class="col-md-12">

            <table class="table">
                <thead>
        <tr>
            <th scope="col"> Id</th>
            <th scope="col"> Show name </th>
            <th scope="col"> Movie Name </th>
            <th scope="col"> Canemas Name </th>
            <th scope="col"> Start Timing </th>
            <th scope="col"> End Timing  </th>
            <th scope="col"> Show_date </th>
            <th scope="col"> Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($show as $item)
         <tr>
            <th scope="row">{{ $item->stid }}</th>
            <td>{{ $item->show_name }}</td>
            <td>{{ $item->mtitle }}</td>
            <td>{{ $item->cname }}</td>
            <td>{{ $item->Starttime }}</td>
            <td>{{ $item->endtime }}</td>
            <td>{{ $item->show_date }}</td>
            <td>{{ $item->price }}</td>
            <td>
                <a href="{{ url('/dashboards/showtime/edit') }}/{{ $item->stid }}" class="btn btn-primary">Edit</a>
          
           <a  onclick="myinfo({{$item->stid}})" class="btn btn-danger">Delect</a> 
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>
</div>
</div>

<script>

    function myinfo(id){
        $de =  confirm('Do you Went To Delect ?')

        if($de == true){
            window.location.href = "/dashboards/showtime/delect/" + id;

        }


    }

</script>

    
@endsection