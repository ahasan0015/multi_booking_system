@extends('admin.layout.master')
@section('title', 'Roles')

@section('content')
<div class="container">
    <h2>Multi Booking Roles</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
               
        </thead>
        <tbody>
            @foreach ($roles as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['role_name'] }}</td>
                <td>
                    <x-button bg="primary"  href="{{ route('role-details', $item['id']) }}">View</x-button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection