@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-5">Cinemas List</h2>
 <div class="container-fluid mt-5">
    <div class="row offset-0">
        <div class="col-md-12">

            <table class="table">
                <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Cinemas Name </th>
            <th scope="col">Cinemas address </th>
            <th scope="col">Cinemas image </th>
            <th scope="col">Cinemas phone no </th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mth as $item)
        <tr>
            <th scope="row">{{ $item['cid'] }}</th>
            <td>{{ $item['cname'] }}</td>
            <td>{{ $item['caddres'] }}</td>
            <td><img src="/cinemasimg/{{ $item['cimg'] }}" width="70px" height="60px" alt=""></td>
            <td>{{ $item['cphone'] }}</td>
            
            <td>
                <a href="{{ url('/dashboards/theater/edit') }}/{{ $item['cid'] }}" class="btn btn-primary">Edit</a>
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
            window.location.href = "/dashboards/theater/delect/" + id;

        }}

</script>

    
@endsection