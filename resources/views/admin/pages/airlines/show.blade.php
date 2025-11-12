@extends('admin.layout.master')
@section('title', 'Airlines Details')
@section('content')
<div class="container">
<h2>Airlines details</h2>
    <table class="table table-bordered table-responsive table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Airline Name</th>
            <th>Country</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $airline['id'] }}</td>
            <td>{{ $airline['airline_name'] }}</td>
            <td>{{ $airline['country'] }}</td>
        </tr>
        
    </tbody>
</table>

</div>
@endsection