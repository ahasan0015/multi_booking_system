<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Airports;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightSearchController extends Controller
{
    public function index(Request $request)
    {
        $flights = [];

        if(!blank($request->from) && !blank($request->from) && !blank($request->from)) {
            $flights = Flight::query()
                ->where('departure_airport_id', $request->from)
                ->where('arrival_airport_id', $request->to)
                ->whereDate('departure_time', $request->date)
                ->get();
        }


        return view('admin.pages.flights.search', [
            'airlines' => Airline::all(),
            'airports' => Airports::all(),
            'flights' => $flights
        ]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'from' => 'required|integer',
            'to' => 'required|integer|different:from',
            'date' => 'required|date'
        ]);

        $flights = Flight::with(['airline', 'departureAirport', 'arrivalAirport'])
            ->where('departure_airport_id', $request->from)
            ->where('arrival_airport_id', $request->to)
            ->whereDate('departure_time', $request->date)
            ->get();

        return view('admin.pages.flights.results', compact('flights'));
    }
}
