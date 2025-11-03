@extends('admin.layout.master')

@section('title', 'Flights Management')

@section('content')
<div class="container-fluid py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary mb-0">✈️ Flights Management</h2>
        <a href="#" class="btn btn-primary rounded-pill px-4">
            <i class="bi bi-plus-lg me-1"></i> Add Flight
        </a>
    </div>

    <!-- Search Flights -->
    <div class="card shadow-sm mb-4 border-0">
        <div class="card-header bg-primary text-white fw-semibold">
            🔍 Search Flights
        </div>
        <div class="card-body">
            <form class="row g-3 align-items-center">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Search by Flight Number">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Select Airline</option>
                        <option>Qatar Airways</option>
                        <option>Emirates</option>
                        <option>Turkish Airlines</option>
                        <option>Biman Bangladesh</option>
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

    <!-- Search Ticket Section -->
    <div class="card shadow-sm mb-4 border-0">
        <div class="card-header bg-success text-white fw-semibold">
            🎫 Search Ticket
        </div>
        <div class="card-body">
            <form class="row g-3 align-items-center">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Ticket ID (e.g. TKT-45678)">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Passenger Name">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Flight No (e.g. QR908)">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-outline-success w-100">
                        <i class="bi bi-search me-1"></i> Find Ticket
                    </button>
                </div>
            </form>

            <!-- Static Result Section -->
            <div class="mt-4">
                <h6 class="fw-bold text-secondary">Sample Ticket Result:</h6>
                <div class="card border-0 shadow-sm mt-2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="fw-bold text-primary mb-1">TKT-45678</h5>
                                <p class="mb-0 text-muted">Passenger: <strong>Rahim Uddin</strong></p>
                                <p class="mb-0 text-muted">Flight: <strong>QR908 (Dhaka → Doha)</strong></p>
                            </div>
                            <div class="text-end">
                                <p class="mb-1 text-success fw-semibold">Confirmed</p>
                                <p class="mb-0">Issued on: 2025-10-30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Flights Table -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-light fw-semibold">
            ✈️ All Flights
        </div>
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
