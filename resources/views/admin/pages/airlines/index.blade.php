@extends('admin.layout.master')
@section('title', 'Airlines')
@section('content')
<div class="container">
    <h2>Airlines Information</h2>
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="my-3 text-end">
        <a href="{{ route('airline.create') }}" class="btn btn-outline-success">Add Airline</a>
    </div>

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
                    <a href="{{ route('airline.show', $item['id']) }}" class="btn btn-primary">View</a>
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
        <tr>
            <th colspan="5">
                {{ $airlines->links('vendor.pagination.bootstrap-5') }}
            </th>
        </tr>

    </table>
</div>
@endsection