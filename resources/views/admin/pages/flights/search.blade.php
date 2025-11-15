@extends('admin.layout.master')
@section('title', 'Search Flights')

@section('content')

<style>
    .search-box {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.08);
        padding: 30px;
        margin-top: -60px;
        position: relative;
        z-index: 5;
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
</style>

<div class="container-fluid p-0">
    <!-- Banner -->
    <div class="bg-dark" style="height: 250px; background: url('{{ asset("assets/img/web_banner/banner.jpg") }}'); background-size: cover;">
</div>


</div>

<div class="container">
    <div class="search-box">

        {{-- Trip Type --}}
        <div class="trip-type d-flex gap-2 mb-4">
            <button type="button" class="btn active">Round Trip</button>
            <button type="button" class="btn btn-light">One Way</button>
            <button type="button" class="btn btn-light">Multi City</button>
        </div>

        <form action="{{ route('flight.search') }}" method="GET">
            <div class="row align-items-center g-3">

                {{-- From Airport --}}
                <div class="col-md-4">
                    <div class="airport-box">
                        <p class="airport-code">DAC</p>
                        <p class="airport-name">Dhaka</p>
                        <select name="from" class=" border-0 p-0 select2" required>
                            <option value="">Select Airport</option>
                            @foreach ($airports as $airport)
                            <option value="{{ $airport->id }}">
                                {{ $airport->airport_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Swap Icon --}}
                <div class="col-md-1 text-center">
                    <i class="bi bi-arrow-left-right fs-3"></i>
                </div>

                {{-- To Airport --}}
                <div class="col-md-4">
                    <div class="airport-box">
                        <p class="airport-code">CXB</p>
                        <p class="airport-name">Cox's Bazar</p>
                        <select name="to" class="form-select border-0 p-0 select2" required>
                            <option value="">Select Airport</option>
                            @foreach ($airports as $airport)
                            <option value="{{ $airport->id }}">
                                {{ $airport->airport_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Date --}}
                <div class="col-md-2">
                    <input type="date" name="date" class="form-control" required>
                </div>

                {{-- Search --}}
                <div class="col-md-1">
                    <button type="submit" class="search-btn w-100">
                        <i class="bi bi-search text-white fs-5"></i>
                    </button>
                </div>
            </div>

            <hr>

            {{-- Fare Types --}}
            <div class="fare-type d-flex mt-2">
                <label><input type="radio" name="fare" value="regular" checked> Regular Fare</label>
                <label><input type="radio" name="fare" value="student"> Student Fare</label>
                <label><input type="radio" name="fare" value="umrah"> Umrah Fare</label>
            </div>

        </form>

    </div>

    @dump($flights)
</div>

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

    <!-- Top Bar -->
    <div class="d-flex justify-content-between align-items-center mb-3 px-2">
        <div>
            <strong>Cheapest</strong> <span class="text-primary">9,352</span>
        </div>
        <div>Earliest <strong>07:00 AM</strong></div>
        <div>Fastest <strong>1 Hr 50 Min</strong></div>
    </div>

    <!-- Flight Result Card -->
    <div class="result-card">

        <span class="best-deal">Best Deal</span>

        <div class="row align-items-center mt-3">

            <!-- Airline Info -->
            <div class="col-md-3 d-flex align-items-start gap-3">
                <img src="{{ asset('assets/img/web_banner/usbangla.png') }}" class="flight-logo" alt="logo" height="50px" width="50px">

                <div>
                    <strong>DAC → CXB</strong><br>
                    <span>Biman Bangladesh Airlines</span><br>
                    <small>1hr 15min</small>
                </div>
            </div>

            <!-- Time Section -->
            <div class="col-md-4">
                <div class="row">
                    <div class="col">
                        <h5 class="m-0">8:00 AM</h5>
                        <small>15 Nov, Saturday</small><br>
                        <small>Hazrat Shahjalal Intl →</small>
                    </div>
                    <div class="col">
                        <h5 class="m-0">9:15 AM</h5>
                        <small>15 Nov, Saturday</small><br>
                        <small>Cox's Bazar Airport</small>
                    </div>
                    <div class="col">
                        <span class="badge bg-light text-dark">Non-Stop</span><br>
                        <small>CXB</small>
                    </div>
                </div>
            </div>

            <!-- Price -->
            <div class="col-md-3 text-end">
                <div class="price-box">
                    <div class="current-price">৳ 8,798</div>
                    <div class="old-price">৳ 9,798</div>
                </div>
                <button class="select-btn mt-2">Select</button>
            </div>
        </div>

        <div class="mt-3">
            <span class="tag-refund">✔ Partially Refundable</span>
            <span class="tag-coins">💰 7</span>
            <span class="float-end view-detail">View Detail ▼</span>
        </div>
    </div>

</div>



@endsection

