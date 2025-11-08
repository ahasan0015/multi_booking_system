@extends('admin.layout.master')
@section('title', 'Create Roles')
@section('content')
    <div class="container">

        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Role Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save Role</button>
        </form>
        

    </div>
@endsection