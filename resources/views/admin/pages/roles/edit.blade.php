@extends('admin.layout.master')
@section('title', 'Create Roles')
@section('content')
    <h2>Edit Roles</h2>
    <div class="container">

        <form action="{{ route('roles.update', $role['id']) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="text" name="page" value="{{ $page }}">
            <div class="mb-3">
                <label for="name" class="form-label">Role Name</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{ old('name', $role['name'] ?? '' )}}">
            </div>
            <button type="submit" class="btn btn-success">Save Role</button>
        </form>


    </div>
@endsection