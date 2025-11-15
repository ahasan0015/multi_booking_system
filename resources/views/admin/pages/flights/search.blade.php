@extends('admin.layout.master')
@section('title', 'Search Flights')

@section('content')

<style>
    .search-box {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.08);
        padding: 30px;
        margin-top: 20px;
    }

    .trip-type button.active {
        background: #0d6efd;
        color: white;
    }

    .trip-type button {
        border-radius: 10px;
        padding: 8px 18px;
    }

    .airport-box {
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 12px 16px;
        background: #fff;
    }

    .airport-code {
        font-size: 24px;
        font-weight: 700;
        margin: 0;
    }

    .airport-name {
        font-weight: 600;
        margin: 0;
    }

    .search-btn {
        background: #ff8c00;
        border-radius: 12px;
        padding: 12px 18px;
        border: none;
    }

    .fare-type label {
        margin-right: 20px;
        cursor: pointer;
    }

    .result-card {
        background: #fff;
        border-radius: 14px;
        padding: 20px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.08);
        margin-bottom: 20px;
    }

    .result-card strong {
        font-size: 16px;
    }
</style>

<div class="container">

    <div class="search-box">

        <form action="{{ route('flight.search') }}" method="GET">
            <div class="row align-items-center g-3">

                {{-- From Airport --}}
                <div class="col-md-4">
                    <div class="airport-box">
                        <p class="airport-code">From</p>
                        <select name="from" class="form-select border-0 p-0" required>
                            <option value="">Select Airport</option>
                            @foreach($airports as $airport)
                            <option value="{{ $airport->id }}" {{ request('from') == $airport->id ? 'selected' : '' }}>
                                {{ $airport->airport_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- To Airport --}}
                <div class="col-md-4">
                    <div class="airport-box">
                        <p class="airport-code">To</p>
                        <select name="to" class="form-select border-0 p-0" required>
                            <option value="">Select Airport</option>
                            @foreach($airports as $airport)
                            <option value="{{ $airport->id }}" {{ request('to') == $airport->id ? 'selected' : '' }}>
                                {{ $airport->airport_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Date --}}
                <div class="col-md-2">
                    <input type="date" name="date" class="form-control" value="{{ request('date') }}" required>
                </div>

                {{-- Search --}}
                <div class="col-md-2">
                    <button type="submit" class="search-btn w-100">Search</button>
                </div>
            </div>
        </form>

        <hr>

        {{-- Fare Types --}}
        <div class="fare-type d-flex mt-2">
            <label><input type="radio" name="fare" value="regular" checked> Regular Fare</label>
            <label><input type="radio" name="fare" value="student"> Student Fare</label>
            <label><input type="radio" name="fare" value="umrah"> Umrah Fare</label>
        </div>

    </div>

    <hr>

    {{-- Search Results --}}
   

    <style>
        .result-card {
            background: #fff;
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
        }

        .best-deal {
            background: #19c37d;
            color: white;
            padding: 5px 12px;
            font-size: 13px;
            border-radius: 0 0 8px 0;
            font-weight: 600;
            display: inline-block;
        }

        .flight-logo {
            height: 45px;
            width: 45px;
            border-radius: 50%;
            object-fit: cover;
        }

        .price-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            min-width: 150px;
        }

        .price-box .current-price {
            font-size: 22px;
            font-weight: 700;
            color: #28a745;
        }

        .price-box .old-price {
            font-size: 15px;
            text-decoration: line-through;
            color: #999;
        }

        .select-btn {
            background: #0d6efd;
            color: white;
            padding: 10px 18px;
            border-radius: 25px;
            font-weight: 600;
            border: none;
            text-decoration: none;
            display: inline-block;
        }

        .tag-refund {
            background: #e8f7ef;
            color: #198754;
            padding: 5px 12px;
            border-radius: 12px;
            font-size: 12px;
            margin-right: 10px;
        }

        .tag-coins {
            background: #fff7e6;
            color: #f4a100;
            padding: 5px 12px;
            border-radius: 12px;
            font-size: 12px;
        }

        .view-detail {
            color: #0d6efd;
            font-weight: 600;
            cursor: pointer;
        }
    </style>

    <div class="container">

        @if(isset($flights) && count($flights) > 0)
        @foreach($flights as $flight)
        <div class="result-card">

            <span class="best-deal">Best Deal</span>

            <div class="row align-items-center mt-3">

                <!-- Airline Info -->
                <div class="col-md-3 d-flex align-items-start gap-3">
                    <img src="{{ asset('images/air/' . strtolower(str_replace(' ', '_', $flight->airline_name)) . '.png') }}"
                        class="flight-logo" alt="{{ $flight->airline_name }} logo">

                    <div>
                        <strong>{{ $flight->departure_airport }} → {{ $flight->arrival_airport }}</strong><br>
                        <span>{{ $flight->airline_name }}</span><br>
                        <small>{{ \Carbon\Carbon::parse($flight->departure_time)->diffInMinutes(\Carbon\Carbon::parse($flight->arrival_time)) }} min</small>
                    </div>
                </div>

                <!-- Time Info -->
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <h5 class="m-0">{{ \Carbon\Carbon::parse($flight->departure_time)->format('h:i A') }}</h5>
                            <small>{{ \Carbon\Carbon::parse($flight->departure_time)->format('d M, l') }}</small><br>
                            <small>{{ $flight->departure_airport }} →</small>
                        </div>
                        <div class="col">
                            <h5 class="m-0">{{ \Carbon\Carbon::parse($flight->arrival_time)->format('h:i A') }}</h5>
                            <small>{{ \Carbon\Carbon::parse($flight->arrival_time)->format('d M, l') }}</small><br>
                            <small>{{ $flight->arrival_airport }}</small>
                        </div>
                        <div class="col">
                            <span class="badge bg-light text-dark">Non-Stop</span><br>
                            <small>{{ $flight->arrival_airport }}</small>
                        </div>
                    </div>
                </div>

                <!-- Price & Select -->
                <div class="col-md-3 text-end">
                    <div class="price-box">
                        <div class="current-price">৳ {{ number_format($flight->price,2) }}</div>
                        {{-- Optional: <div class="old-price">৳ {{ number_format($flight->old_price ?? 0,2) }}
                    </div> --}}
                </div>
                <a href="{{ route('flight.book', $flight->id) }}" target="_blank" class="select-btn mt-2">
                    Select
                </a>
            </div>

        </div>

        <div class="mt-3">
            <span class="tag-refund">✔ Partially Refundable</span>
            <span class="tag-coins">💰 7</span>
            <span class="float-end view-detail">View Detail ▼</span>
        </div>
    </div>
    @endforeach
    @else
    @if(request()->has('from'))
    <p class="text-danger">No flights found for selected criteria.</p>
    @endif
    @endif




</div>

@endsection