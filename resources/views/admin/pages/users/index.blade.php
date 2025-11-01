@extends('admin.layout.master')
@section('title', 'Users')

@section('content')
<div class="container">
    <h2>Multi Booking Users</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>phone</th>
                <th>Action</th>
               
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['first_name'] }} {{ $item['last_name'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['phone'] }}</td>
                <td>
                    <x-button bg="primary"  href="{{ route('user-details', $item['id']) }}">View</x-button>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="5">
                    {{ $users->links('vendor.pagination.bootstrap-5') }}
                </th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection