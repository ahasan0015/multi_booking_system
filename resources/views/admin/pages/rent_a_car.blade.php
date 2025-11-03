@extends('admin.layout.master')

@section('title', 'Car Rental Management')

@section('content')
<div class="container-fluid py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary mb-0">🚗 Car Rental Management</h2>
        <a href="#" class="btn btn-primary rounded-pill px-4">
            <i class="bi bi-plus-lg me-1"></i> Add Car
        </a>
    </div>

    <!-- Search Cars -->
    <div class="card shadow-sm mb-4 border-0">
        <div class="card-header bg-primary text-white fw-semibold">
            🔍 Search Cars
        </div>
        <div class="card-body">
            <form class="row g-3 align-items-center">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Location">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Select Car Type</option>
                        <option>Sedan</option>
                        <option>SUV</option>
                        <option>Hatchback</option>
                        <option>Luxury</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Select Provider</option>
                        <option>Uber Cars</option>
                        <option>Careem</option>
                        <option>Local Rental</option>
                    </select>
                </div>
                <div class="col-md-3 d-grid">
                    <button type="submit" class="btn btn-outline-primary w-100">
                        <i class="bi bi-search me-1"></i> Search
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Sample Car Cards -->
    <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
        <div class="col">
            <div class="card shadow-sm border-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://images.unsplash.com/photo-1618050820702-4f2b0c8f27d4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                             class="img-fluid rounded-start" alt="Toyota Corolla">
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <h5 class="fw-bold text-primary mb-1">Toyota Corolla</h5>
                            <p class="mb-0 text-muted">Provider: Uber Cars</p>
                            <p class="mb-0 text-muted">Type: Sedan</p>
                            <p class="mb-0 text-muted">Seats: 4</p>
                            <p class="mb-0 text-muted">Location: Dhaka, Bangladesh</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center align-items-end pe-4">
                        <p class="mb-1 fw-bold text-success">$50 / Day</p>
                        <a href="#" class="btn btn-outline-primary btn-sm w-100 mb-1">View Details</a>
                        <a href="#" class="btn btn-outline-success btn-sm w-100">Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm border-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://images.unsplash.com/photo-1608611849340-8d2060b5939c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                             class="img-fluid rounded-start" alt="Honda CRV">
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <h5 class="fw-bold text-primary mb-1">Honda CRV</h5>
                            <p class="mb-0 text-muted">Provider: Careem</p>
                            <p class="mb-0 text-muted">Type: SUV</p>
                            <p class="mb-0 text-muted">Seats: 5</p>
                            <p class="mb-0 text-muted">Location: Chittagong, Bangladesh</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center align-items-end pe-4">
                        <p class="mb-1 fw-bold text-success">$80 / Day</p>
                        <a href="#" class="btn btn-outline-primary btn-sm w-100 mb-1">View Details</a>
                        <a href="#" class="btn btn-outline-success btn-sm w-100">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cars Table -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-light fw-semibold">
            🚗 All Cars
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle table-hover">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Car Name</th>
                            <th>Provider</th>
                            <th>Type</th>
                            <th>Seats</th>
                            <th>Location</th>
                            <th>Price/Day</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1618050820702-4f2b0c8f27d4?ixlib=rb-4.0.3&auto=format&fit=crop&w=60&q=80" 
                                     class="img-fluid rounded" alt="Toyota Corolla">
                            </td>
                            <td>Toyota Corolla</td>
                            <td>Uber Cars</td>
                            <td>Sedan</td>
                            <td>4</td>
                            <td>Dhaka</td>
                            <td>$50</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1608611849340-8d2060b5939c?ixlib=rb-4.0.3&auto=format&fit=crop&w=60&q=80" 
                                     class="img-fluid rounded" alt="Honda CRV">
                            </td>
                            <td>Honda CRV</td>
                            <td>Careem</td>
                            <td>SUV</td>
                            <td>5</td>
                            <td>Chittagong</td>
                            <td>$80</td>
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
