@extends('layout.dashboardlay')

@section('content')
 <h2 class="text-center mt-5">Movie Categroy List</h2>
 <div class="container-fluid mt-5">
    <div class="row offset-2">
        <div class="col-md-10">

            <table class="table">
                <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Movie Categroy Name </th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cat as $item)
        <tr>
            <th scope="row">{{ $item['mcid'] }}</th>
            <td>{{ $item['moviecatename'] }}</td>
            <td>
                <a href="{{ url('/dashboards/moviecate/edit') }}/{{  $item['mcid'] }}" class="btn btn-primary">Edit</a>
                {{-- <a href="{{ url('/dashboards/moviecate/delect') }}/{{  $item['mcid'] }}" class="btn btn-danger">Delect</a>   --}}
                <a  onclick="myinfo({{ $item['mcid'] }})" href="{{ url('/dashboards/moviecate/delect') }}/{{  $item['mcid'] }}"   class="btn btn-danger">Delect</a>
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
            window.location.href = "/dashboards/moviecate/delect"+ id;

        }


    }

</script>


@endsection
