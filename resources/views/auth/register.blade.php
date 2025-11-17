@extends('admin.layout.form')

@section('title', 'Register')

@section('content')

<div class="col-lg-4 col-sm-7">
    <h4 class="text-center text-primary fw-bold mb-3">Register User</h4>

    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-3">

            <form action="#" method="POST">
                <div class="row g-2">

                    <div class="col-md-6">
                        <label class="form-label small fw-semibold">First Name</label>
                        <input type="text" class="form-control form-control-md rounded-2" placeholder="First name">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-semibold">Last Name</label>
                        <input type="text" class="form-control form-control-md rounded-2" placeholder="Last name">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label small fw-semibold">Email</label>
                        <input type="email" class="form-control form-control-md rounded-2" placeholder="example@mail.com">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label small fw-semibold">Phone</label>
                        <input type="number" class="form-control form-control-md rounded-2" placeholder="01700000000">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label small fw-semibold">Role</label>
                        <select class="form-select form-select-md rounded-2">
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                            <option value="3">Manager</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-semibold">Password</label>
                        <input type="password" class="form-control form-control-md rounded-2" placeholder="********">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-semibold">Confirm</label>
                        <input type="password" class="form-control form-control-md rounded-2" placeholder="********">
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