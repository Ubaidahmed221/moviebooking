@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-5"> List Client</h2>
 <div class="container-fluid mt-5">
    <div class="row offset-0">
        <div class="col-md-12">

            <table class="table">
                <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">client Name</th>
            <th scope="col">client email</th>
            <th scope="col">client password</th>
            <th scope="col">client phone</th>
            <th scope="col">client Address</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clint as $item)
        <tr>
            <th scope="row">{{ $item['cid'] }}</th>
            <td>{{ $item['cname'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td>{{ $item['password'] }}</td>
            <td>{{ $item['phone'] }}</td>
            <td>{{ $item['address'] }}</td>
            <td>
                <a href="{{ url('/dashboards/client/edit') }}/{{  $item['cid'] }}" class="btn btn-primary">Edit</a>
       
       <a  onclick="myinfo({{ $item['cid'] }})" class="btn btn-danger">Delect</a> 
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
            window.location.href = "/dashboards/client/delect"+ id;

        }


    }

</script>

    
@endsection