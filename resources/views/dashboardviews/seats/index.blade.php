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
            <th scope="col">seat 1</th>
            <th scope="col">seat 2</th>
            <th scope="col">seat 3</th>
            <th scope="col">seat 4</th>
            <th scope="col">seat 5</th>
            <th scope="col">seat 6</th>
            <th scope="col">seat 7</th>
            <th scope="col">seat 8</th>
            <th scope="col">seat 9</th>
            <th scope="col">seat 10</th>
            <th scope="col"> Cinemas Name </th>
            <th scope="col"> Client Name</th>
        
      
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($seat as $item)
         <tr>
            <th scope="row">{{ $item->seatid }}</th>
            <td>{{ $item->seat1 }}</td>
            <td>{{ $item->seat2 }}</td>
            <td>{{ $item->seat3 }}</td>
            <td>{{ $item->seat4 }}</td>
            <td>{{ $item->seat5 }}</td>
            <td>{{ $item->seat6 }}</td>
            <td>{{ $item->seat7 }}</td>
            <td>{{ $item->seat8 }}</td>
            <td>{{ $item->seat9 }}</td>
            <td>{{ $item->seat10 }}</td>
            <td>{{ $item->cid }}</td>
            <td>{{ $item->c_id }}</td>
           
            
            <td>
                <a href="{{ url('/dashboards/seat/edit') }}/{{ $item->seatid }}" class="btn btn-primary">Edit</a>
          
           <a  onclick="myinfo({{ $item->seatid }})" class="btn btn-danger">Delect</a> 
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
            window.location.href = "/dashboards/seat/delect/" + id;

        }


    }

</script>

    
@endsection