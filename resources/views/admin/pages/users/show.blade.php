@extends('admin.layout.master')
@section('title', 'User Details')

@section('content')
    <div class="container py-4">
        <h2 class="fw-bold text-primary mb-4">User Profile</h2>
        {{-- {{ $user['photo'] }} --}}
        <div class="text-center">
            @if($user['photo'] !== null)
                <img src="{{ asset('storage/' . $user['photo']) }}" class="rounded" alt="Profile image" width="200"
                    height="200">
            @else
                <img src="https://placehold.co/200" class="rounded border border-dark" alt="Profile image" width="200"
                    height="200">
            @endif
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <tbody>
                            <tr>
                                <th scope="row" class="text-end" style="width: 30%;">ID:</th>
                                <td>{{ $user['id'] }}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-end">Name:</th>
                                <td>{{ $user['first_name'] }} {{ $user['last_name'] }}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-end">Email:</th>
                                <td>{{ $user['email'] }}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-end">Role:</th>
                                <td>{{ $user['role'] ?? 'N/A' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Back Button -->
                <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3 rounded-pill px-4">
                    <i class="bi bi-arrow-left me-1"></i> Back to Users
                </a>
            </div>
        </div>
    </div>
@endsection