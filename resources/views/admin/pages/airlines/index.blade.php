@extends('admin.layout.master')
@section('title', 'Airlines')
@section('content')
<div class="container">
<h2>Airlines details</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Airlines Name</th>
            <th>Airlines Country</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($airlines as $item )
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['airline_name'] }}</td>
            <td>{{ $item['country'] }}</td>
            <td>
                <a href="" class="btn btn-primary">View</a>
                <a href="" class="btn btn-warning">Edit</a>
                <form action="" class="d-inline"> 
                    @csrf
                    @method('DELETE')
                    <a href="" class="btn btn-danger">Delete</a>
                </form>
                
            </td>
        </tr>
            
        @endforeach
    </tbody>

</table>
</div>
@endsection