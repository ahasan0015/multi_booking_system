@extends('admin.layout.master')
@section('title', 'Search Flights')

@section('content')

<div class="container mt-4">
    <form action="{{ route('flight.search') }}" method="GET">
        <div class="row g-3">
            <div class="col-md-4">
                <select name="from" class="form-select" required>
                    <option value="">From Airport</option>
                    @foreach($airports as $airport)
                    <option value="{{ $airport->id }}" {{ request('from') == $airport->id ? 'selected' : '' }}>
                        {{ $airport->airport_name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <select name="to" class="form-select" required>
                    <option value="">To Airport</option>
                    @foreach($airports as $airport)
                    <option value="{{ $airport->id }}" {{ request('to') == $airport->id ? 'selected' : '' }}>
                        {{ $airport->airport_name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <input type="date" name="date" class="form-control" value="{{ request('date') }}" required>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary w-100">Search</button>
            </div>
        </div>
    </form>

    <hr>

    @if(isset($flights) && count($flights) > 0)
    @foreach($flights as $flight)
    <div class="result-card mb-3">
        <div class="row align-items-center">
            <div class="col-md-3">
                <strong>{{ $flight->departure_airport }} → {{ $flight->arrival_airport }}</strong><br>
                <span>{{ $flight->airline_name }}</span>
            </div>
            <div class="col-md-4">
                {{ \Carbon\Carbon::parse($flight->departure_time)->format('h:i A') }} →
                {{ \Carbon\Carbon::parse($flight->arrival_time)->format('h:i A') }}<br>
                Duration: {{ \Carbon\Carbon::parse($flight->departure_time)->diffInMinutes(\Carbon\Carbon::parse($flight->arrival_time)) }} min
            </div>
            <div class="col-md-3">
                <strong>৳ {{ number_format($flight->price,2) }}</strong>
            </div>
            <!-- **Select Button Here** -->
            <div class="col-md-2 text-end">
                <a href="{{ route('flight.book', $flight->id) }}" target="_blank" class="btn btn-success mt-2">
                    Select
                </a>
            </div>
        </div>
    </div>
    @endforeach
    @else
    @if(request()->has('from'))
    <p class="text-danger">No flights found.</p>
    @endif
    @endif
</div>

@endsection