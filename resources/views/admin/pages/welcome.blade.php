@extends('admin.layout.master')

@section('title', 'Flight Management')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg border-0">
        <div class="card-body p-4">
            <h2 class="text-center text-primary mb-4">✈️ Flight Management System</h2>

            {{-- Search Form --}}
            <form class="row g-3 justify-content-center mb-4">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="From (City/Airport)">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="To (City/Airport)">
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-2 d-grid">
                    <button type="button" class="btn btn-primary">
                        <i class="bi bi-search"></i> Search
                    </button>
                </div>
            </form>

            {{-- Static Table --}}
            <div class="table-responsive">
                <table class="table table-striped align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Flight Name</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Departure</th>
                            <th>Arrival</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>BD Airways 102</td>
                            <td>Dhaka</td>
                            <td>Chittagong</td>
                            <td>08:30 AM</td>
                            <td>09:45 AM</td>
                            <td>$85</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Air Asia 220</td>
                            <td>Dhaka</td>
                            <td>Kuala Lumpur</td>
                            <td>02:00 PM</td>
                            <td>06:15 PM</td>
                            <td>$310</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>US Bangla 105</td>
                            <td>Dhaka</td>
                            <td>Sylhet</td>
                            <td>06:45 AM</td>
                            <td>07:50 AM</td>
                            <td>$60</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Biman Bangladesh 777</td>
                            <td>Dhaka</td>
                            <td>London</td>
                            <td>11:30 PM</td>
                            <td>07:15 AM (+1)</td>
                            <td>$950</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">Details</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center text-muted mt-3">
                Showing 4 available flights
            </p>
        </div>
    </div>
</div>
@endsection
