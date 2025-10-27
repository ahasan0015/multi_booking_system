@extends('admin.layout.master')

@section('title', 'Flights Management')

@section('content')
<div class="container-fluid">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">✈️ Flights Management</h2>
        <a href="#" class="btn btn-primary rounded-pill px-4">
            <i class="bi bi-plus-lg me-1"></i> Add Flight
        </a>
    </div>

    <!-- Search + Filter -->
    <div class="card shadow-sm mb-4 border-0">
        <div class="card-body">
            <form class="row g-3">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Search by Flight Number">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Select Airline</option>
                        <option>Qatar Airways</option>
                        <option>Emirates</option>
                        <option>Turkish Airlines</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Status</option>
                        <option>Scheduled</option>
                        <option>Delayed</option>
                        <option>Cancelled</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-outline-primary w-100">
                        <i class="bi bi-search me-1"></i> Search
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Flights Table -->
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle table-hover">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>#</th>
                            <th>Flight No</th>
                            <th>Airline</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Departure</th>
                            <th>Arrival</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>QR908</td>
                            <td>Qatar Airways</td>
                            <td>Dhaka</td>
                            <td>Doha</td>
                            <td>2025-11-01 09:30</td>
                            <td>2025-11-01 12:45</td>
                            <td><span class="badge bg-success">Scheduled</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>EK207</td>
                            <td>Emirates</td>
                            <td>Dhaka</td>
                            <td>Dubai</td>
                            <td>2025-11-02 10:00</td>
                            <td>2025-11-02 13:20</td>
                            <td><span class="badge bg-warning text-dark">Delayed</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
