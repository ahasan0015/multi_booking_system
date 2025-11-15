@extends('admin.layout.master')
@section('title', 'Flight Booking')

@section('content')
<div class="container mt-4">
    <h3>Flight Booking: {{ $flight->departure_airport }} → {{ $flight->arrival_airport }}</h3>
    <p>Airline: {{ $flight->airline_name }}</p>
    <p>Departure: {{ \Carbon\Carbon::parse($flight->departure_time)->format('d M, Y h:i A') }}</p>
    <p>Arrival: {{ \Carbon\Carbon::parse($flight->arrival_time)->format('d M, Y h:i A') }}</p>
    <p>Price: ৳ {{ number_format($flight->price,2) }}</p>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('flight.book.submit', $flight->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>নাম</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>ইমেইল</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>ফোন</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Seat Class</label>
            <select name="seat_class" class="form-select" required>
                <option value="Economy">Economy</option>
                <option value="Business">Business</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Booking Submit করুন</button>
    </form>
</div>
@endsection
