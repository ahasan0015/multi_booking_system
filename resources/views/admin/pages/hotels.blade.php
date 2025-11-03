@extends('admin.layout.master')

@section('title', 'Hotel Management')

@section('content')
    <div class="container-fluid py-4">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-primary mb-0">🏨 Hotel Management</h2>
            <a href="#" class="btn btn-primary rounded-pill px-4">
                <i class="bi bi-plus-lg me-1"></i> Add Hotel
            </a>
        </div>

        <!-- Search Hotels -->
        <div class="card shadow-sm mb-4 border-0">
            <div class="card-header bg-primary text-white fw-semibold">
                🔍 Search Hotels
            </div>
            <div class="card-body">
                <form class="row g-3 align-items-center">
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Hotel Name or Location">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="City">
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Select Rating</option>
                            <option>⭐ 3</option>
                            <option>⭐ 4</option>
                            <option>⭐ 5</option>
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

        <!-- Search Result Section -->
        <div class="card shadow-sm mb-4 border-0">
            <div class="card-header bg-success text-white fw-semibold">
                🔔 Sample Hotel Result
            </div>
            <div class="card-body">
                <div class="card border-0 shadow-sm mb-3">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="https://images.unsplash.com/photo-1560347876-aeef00ee58a1?fit=crop&w=400&h=300"
                                class="img-fluid rounded-start" alt="The Grand Palace Hotel">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="fw-bold text-primary mb-1">The Grand Palace Hotel</h5>
                                <p class="mb-0 text-muted">Location: Dhaka, Bangladesh</p>
                                <p class="mb-0 text-muted">Rating: ⭐⭐⭐⭐</p>
                                <p class="mb-0 text-muted">Description: Luxury hotel with modern amenities and city view.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex flex-column justify-content-center align-items-end pe-4">
                            <p class="mb-1 fw-bold text-success">$120 / Night</p>
                            <a href="#" class="btn btn-outline-primary btn-sm w-100 mb-1">View Details</a>
                            <a href="#" class="btn btn-outline-success btn-sm w-100">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow-sm mb-3">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="https://images.unsplash.com/photo-1560347876-aeef00ee58a1?fit=crop&w=400&h=300"
                                class="img-fluid rounded-start" alt="The Grand Palace Hotel">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="fw-bold text-primary mb-1">The Grand Palace Hotel</h5>
                                <p class="mb-0 text-muted">Location: Dhaka, Bangladesh</p>
                                <p class="mb-0 text-muted">Rating: ⭐⭐⭐⭐</p>
                                <p class="mb-0 text-muted">Description: Luxury hotel with modern amenities and city view.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex flex-column justify-content-center align-items-end pe-4">
                            <p class="mb-1 fw-bold text-success">$120 / Night</p>
                            <a href="#" class="btn btn-outline-primary btn-sm w-100 mb-1">View Details</a>
                            <a href="#" class="btn btn-outline-success btn-sm w-100">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow-sm mb-3">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="https://images.unsplash.com/photo-1560347876-aeef00ee58a1?fit=crop&w=400&h=300"
                                class="img-fluid rounded-start" alt="The Grand Palace Hotel">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="fw-bold text-primary mb-1">The Grand Palace Hotel</h5>
                                <p class="mb-0 text-muted">Location: Dhaka, Bangladesh</p>
                                <p class="mb-0 text-muted">Rating: ⭐⭐⭐⭐</p>
                                <p class="mb-0 text-muted">Description: Luxury hotel with modern amenities and city view.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex flex-column justify-content-center align-items-end pe-4">
                            <p class="mb-1 fw-bold text-success">$120 / Night</p>
                            <a href="#" class="btn btn-outline-primary btn-sm w-100 mb-1">View Details</a>
                            <a href="#" class="btn btn-outline-success btn-sm w-100">Book Now</a>
                        </div>
                    </div>
                </div>

                
                


            </div>
        </div>

        <!-- Hotels Table -->
        <div class="card shadow-sm border-0">
            <div class="card-header bg-light fw-semibold">
                🏨 All Hotels
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-hover">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Hotel Name</th>
                                <th>Location</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>Rating</th>
                                <th>Price/Night</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>1</td>
                                <td><img src="https://images.unsplash.com/photo-1560347876-aeef00ee58a1?fit=crop&w=60&h=40"
                                        class="img-fluid rounded" alt="The Grand Palace Hotel"></td>
                                <td>The Grand Palace Hotel</td>
                                <td>Dhaka</td>
                                <td>Dhaka</td>
                                <td>Bangladesh</td>
                                <td>⭐⭐⭐⭐</td>
                                <td>$120</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="https://images.unsplash.com/photo-1590490351139-0f82d6bdf41b?fit=crop&w=60&h=40"
                                        class="img-fluid rounded" alt="Sea View Resort"></td>
                                <td>Sea View Resort</td>
                                <td>Cox’s Bazar</td>
                                <td>Cox’s Bazar</td>
                                <td>Bangladesh</td>
                                <td>⭐⭐⭐⭐⭐</td>
                                <td>$220</td>
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