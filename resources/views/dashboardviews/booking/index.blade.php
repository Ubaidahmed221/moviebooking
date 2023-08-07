@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-5">Booking List</h2>
 <div class="container-fluid mt-5">
    <div class="row offset-0">
        <div class="col-md-12">

            <table class="table">
                <thead>
        <tr>
            <th scope="col"> Id</th>
            <th scope="col">Client Name</th>
            <th scope="col"> Show time  </th>
            <th scope="col"> Serial Number </th>
            <th scope="col"> Booking Price  </th>
            <th scope="col"> Booking Time</th>
            {{-- <th scope="col"> Seat number</th> --}}
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($book as $item)
         <tr>
            <th scope="row">{{ $item->bookid }}</th>
            <td>{{ $item->cname }}</td>
            <td>{{ $item->show_name }}</td>
            <td>{{ $item->serialnum }}</td>
           
            <td>{{ $item->tprice }}</td>
            <td>{{ $item->booktime }}</td>
            {{-- <td>{{ $item->seatid }}</td> --}}
            <td>
                <a href="{{ url('/dashboards/mbooking/edit') }}/{{ $item->bookid }}" class="btn btn-primary">Edit</a>
          
           <a  onclick="myinfo({{ $item->bookid }})" class="btn btn-danger">Delect</a> 
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
            window.location.href = "/dashboards/mbooking/delect/" + id;

        }


    }

</script>

    
@endsection