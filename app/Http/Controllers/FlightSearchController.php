<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlightSearchController extends Controller
{
    // Show search form
    public function index()
    {
        $airports = DB::table('airports')->get();
        return view('admin.pages.flights.search', compact('airports'));
    }

    // Search results
    public function search(Request $request)
    {
        $request->validate([
            'from' => 'required|integer',
            'to' => 'required|integer|different:from',
            'date' => 'required|date'
        ]);

        $airports = DB::table('airports')->get();

        $flights = DB::table('flights as f')
            ->join('airlines as a', 'f.airline_id', '=', 'a.id')
            ->join('airports as d', 'f.departure_airport_id', '=', 'd.id')
            ->join('airports as r', 'f.arrival_airport_id', '=', 'r.id')
            ->where('f.departure_airport_id', $request->from)
            ->where('f.arrival_airport_id', $request->to)
            ->whereDate('f.departure_time', $request->date)
            ->select(
                'f.*',
                'a.airline_name',
                'd.airport_name as departure_airport',
                'r.airport_name as arrival_airport'
            )
            ->get();

        return view('admin.pages.flights.search', compact('airports', 'flights'));
    }
}
