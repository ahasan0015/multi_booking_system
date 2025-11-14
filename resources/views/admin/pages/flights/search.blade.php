@extends('admin.layout.master')
@section('title', 'Search Flights')

@section('content')

<style>
    .search-box {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0px 4px 20px rgba(0,0,0,0.08);
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
    <div class="bg-dark" style="height: 250px; background: url('/images/banner.jpg'); background-size: cover;">
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

        <form action="{{ route('flight.search.results') }}" method="GET">
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
                                <option value="{{ $airport->id }}" >
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
</div>

@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $('.select2').select2();
});
</script>
@endsection
