@extends('admin.layout.master')
@section('title', 'Edit User')
@section('content')
    <h2>Edit User</h2>
    <form action="{{ route('users.update', $user['id']) }}" method="POST">
        @csrf
        @method('PATCH')
        <input type="hidden" name="page" value="{{ $page }}">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-sm p-4">
                        <h4 class="text-center mb-4">Update Profile</h4>

                        <!-- First Name -->
                        <div class="mb-3">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" name="fname" id="fname" class="form-control"
                                value="{{ old('fname', $user['first_name'] ?? '') }}">
                            @error('fname')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Last Name -->
                        <div class="mb-3">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control"
                                value="{{ old('lname', $user['last_name'] ?? '') }}">
                            @error('lname')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Role -->
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select name="role_id" id="role" class="form-select">
                                <option value="">-- Select Role --</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" {{ old('role_id', $user->role_id ?? '') == $role->id ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('role_id')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit -->
                        <div class="text-end">
                            <input type="submit" value="Update" class="btn btn-success px-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>


@endsection