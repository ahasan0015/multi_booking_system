@extends('admin.layout.master')
@section('title', 'Create Roles')
@section('content')
    <h2>Edit Roles</h2>
    <div class="container">

        <form action="" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="page" value="">
            <div class="mb-3">
                <label for="name" class="form-label">Role Name</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{ old('name') }}">
            </div>
            <button type="submit" class="btn btn-success">Save Role</button>
        </form>


    </div>
@endsection