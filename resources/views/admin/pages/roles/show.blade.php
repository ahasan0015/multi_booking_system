@extends('admin.layout.master')
@section('title', 'Roles Details')
@section('content')
<div class="container py-4">
    <h2 class="fw-bold text-primary mb-3">Roles Profile</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle">
            <tbody>
                <tr>
                    <th scope="row" class="text-end" style="width: 30%;">Trainee ID:</th>
                    <td>{{ $role['id'] }}</td>
                </tr>
                <tr>
                    <th scope="row" class="text-end">Trainee Role:</th>
                    <td>{{ $role['name'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection