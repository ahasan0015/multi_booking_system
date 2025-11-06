@extends('admin.layout.master')
@section('title', 'Edit User')
@section('content')
<h2>Edit User</h2>
<form action="{{ route('users.update',$user['id']) }}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="page" value="{{ $page }}">
    <div class="row g-3">
        <label for="">First Name</label>
        <input type="text" name="fname" class="form-control" value="{{ old('fname') }}">
        @error('fname')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6">
        <label>Last Name</label>
        <input type="text" name="lname" class="form-control" value="{{ old('lname') ?? $user['last_name'] }}">
        @error('lname')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6">
        <label>Last Name</label>
        <input type="text" name="lname" class="form-control" value="{{ old('lname') ?? $user['last_name'] }}">
        @error('lname')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-12 text-end">
        <input type="submit" value="Update" class="btn btn-success">
    </div>
</form>


@endsection