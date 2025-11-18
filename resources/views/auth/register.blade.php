@extends('admin.layout.form')

@section('title', 'Register')

@section('content')

<div class="col-lg-4 col-sm-7">
    <h4 class="text-center text-primary fw-bold mb-3">Register User</h4>

    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-3">

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="row g-2">

                    <div class="col-md-6">
                        <label class="form-label small fw-semibold">First Name</label>
                        <input type="text" name="first_name" class="form-control form-control-md rounded-2" placeholder="First name" value="{{ old('first_name') }}">
                        @error('first_name')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-semibold">Last Name</label>
                        <input type="text" name="last_name" class="form-control form-control-md rounded-2" placeholder="Last name" value="{{ old('last_name') }}">
                        @error('last_name')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label class="form-label small fw-semibold">Email</label>
                        <input type="email" name="email" class="form-control form-control-md rounded-2" placeholder="example@mail.com" value="{{ old('email') }}">
                        @error('email')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label class="form-label small fw-semibold">Phone</label>
                        <input type="number" name="phone" class="form-control form-control-md rounded-2" placeholder="01700000000" value="{{ old('phone') }}">
                        @error('phone')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label class="form-label small fw-semibold">Role</label>
                        <select name="role_id" class="form-select form-select-md rounded-2">
                            <option value="1" {{ old('role_id') == 1 ? 'selected' : '' }}>Admin</option>
                            <option value="2" {{ old('role_id') == 2 ? 'selected' : '' }}>User</option>
                            <option value="3" {{ old('role_id') == 3 ? 'selected' : '' }}>Manager</option>
                        </select>
                        @error('role_id')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-semibold">Password</label>
                        <input type="password" name="password" class="form-control form-control-md rounded-2" placeholder="********">
                        @error('password')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-semibold">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control form-control-md rounded-2" placeholder="********">
                    </div>

                    <div class="col-md-12 mt-2 text-end">
                        <button type="submit" class="btn btn-primary btn-md px-3 rounded-2">Register</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection
