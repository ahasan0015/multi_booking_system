@extends('admin.layout.master')
@section('title', 'Flight Booking')

@section('content')
<div class="container mt-4">

    <h3 class="mb-3">Flight Booking</h3>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    <button class="btn btn-success mb-4" onclick="printTicket()">Print Ticket</button>
    @endif

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $flight->airline_name }}</h5>
            <p class="card-text"><strong>From:</strong> {{ $flight->departure_airport }}</p>
            <p class="card-text"><strong>To:</strong> {{ $flight->arrival_airport }}</p>
            <p class="card-text"><strong>Departure:</strong> {{ \Carbon\Carbon::parse($flight->departure_time)->format('d M, Y h:i A') }}</p>
            <p class="card-text"><strong>Arrival:</strong> {{ \Carbon\Carbon::parse($flight->arrival_time)->format('d M, Y h:i A') }}</p>
            <p class="card-text"><strong>Price:</strong> ৳ {{ number_format($flight->price, 2) }}</p>
        </div>
    </div>

    <form action="{{ route('flight.book.submit', $flight->id) }}" method="POST" class="mb-5">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Seat Class</label>
                <select name="seat_class" class="form-select" required>
                    <option value="Economy">Economy</option>
                    <option value="Business">Business</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Book Ticket</button>
    </form>

    @if(session('success'))
    <div id="ticket" class="card border-primary p-4" style="max-width:600px; margin:auto; font-family: 'Segoe UI', sans-serif;">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-primary m-0">Flight Ticket</h3>
            
            <img src="{{ asset('images/air/' . strtolower(str_replace(' ', '_', $flight->airline_name)) . '.png') }}"
                alt="{{ $flight->airline_name }} logo" style="height:50px; width:50px; object-fit:cover;">
        </div>

        <hr>

        <!-- Passenger Info -->
        <div class="mb-3">
            <h5 class="text-secondary">Passenger Details</h5>
            <p><strong>Name:</strong> {{ session('passenger_name') }}</p>
            <p><strong>Seat Class:</strong> {{ session('seat_class') }}</p>
        </div>

        <hr>

        <!-- Flight Info -->
        <div class="mb-3">
            <h5 class="text-secondary">Flight Information</h5>
            <div class="d-flex justify-content-between">
                <div>
                    <p><strong>Airline:</strong> {{ $flight->airline_name }}</p>
                    <p><strong>From:</strong> {{ $flight->departure_airport }}</p>
                    <p><strong>Departure:</strong> {{ \Carbon\Carbon::parse($flight->departure_time)->format('d M, Y h:i A') }}</p>
                </div>
                <div>
                    <p><strong>To:</strong> {{ $flight->arrival_airport }}</p>
                    <p><strong>Arrival:</strong> {{ \Carbon\Carbon::parse($flight->arrival_time)->format('d M, Y h:i A') }}</p>
                    <p><strong>Price:</strong> ৳ {{ number_format($flight->price, 2) }}</p>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <div class="text-center mt-3">
            <p class="mb-0"><em>Thank you for booking with us!</em></p>
            <small class="text-muted">Please arrive at the airport at least 2 hours before departure.</small>
        </div>
    </div>
    @endif
</div>

<script>
    function printTicket() {
        let ticketContent = document.getElementById('ticket').innerHTML;
        let myWindow = window.open('', '', 'width=800,height=600');
        myWindow.document.write('<html><head><title>Print Ticket</title></head><body>');
        myWindow.document.write(ticketContent);
        myWindow.document.write('</body></html>');
        myWindow.document.close();
        myWindow.focus();
        myWindow.print();
    }
</script>

@endsection