@extends('admin.layout.master')
@section('title', 'Roles')

@section('content')
    <div class="container">
        <h2>Multi Booking Roles</h2>
        <a href="{{ route('roles.create') }}" class="btn btn-outline-primary float-end">Add Roles</a>

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
                        <td>{{ $item['name'] }}</td>
                        <td>
                            <x-button bg="primary" href="{{ route('role-details', $item['id']) }}">View</x-button>
                            <x-button bg="warning" href="{{ route('roles.edit',$item['id']) }}" class='ms-2'>
                                Edit
                            </x-button>

                            <form action="{{ route('role-destroy', $item['id']) }}" method="POST" class="d-inline"> @csrf
                                @method('DELETE')
                                {{-- <a type="submit" class="btn btn-danger">Delete</a> --}}
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete it?');">
                                    Delete
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection