<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlightBookingController extends Controller
{
    // Booking ফর্ম দেখানো
    public function show($id)
    {
        $flight = DB::table('flights as f')
            ->join('airlines as a', 'f.airline_id', '=', 'a.id')
            ->join('airports as d', 'f.departure_airport_id', '=', 'd.id')
            ->join('airports as r', 'f.arrival_airport_id', '=', 'r.id')
            ->where('f.id', $id)
            ->select(
                'f.*',
                'a.airline_name',
                'd.airport_name as departure_airport',
                'r.airport_name as arrival_airport'
            )
            ->first();

        if (!$flight) {
            abort(404, "Flight পাওয়া যায়নি");
        }

        return view('admin.pages.flights.booking', compact('flight'));
    }

    // Booking সাবমিট করা
    public function store(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'seat_class' => 'required|string',
        ]);

        $flight = DB::table('flights')->where('id', $id)->first();
        if (!$flight) {
            return redirect()->back()->with('error', 'Flight not found');
        }

        // Booking save
        $bookingId = DB::table('bookings')->insertGetId([
            'user_id' => null, // যদি login system থাকে, Auth::id() ব্যবহার করুন
            'booking_type_id' => 1, // Regular
            'total_price' => $flight->price,
            'status_id' => 1, // Pending
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Booking flight save
        DB::table('booking_flights')->insert([
            'booking_id' => $bookingId,
            'flight_id' => $flight->id,
            'seat_class_id' => ($request->seat_class == 'Business') ? 2 : 1,
            'price' => $flight->price,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Passenger save
        // DB::table('passengers')->insert([
        //     'booking_id' => $bookingId,
        //     'name' => $request->name,
        //     'age' => null,
        //     'passport_number' => null,
        //     'nationality' => 'Bangladeshi',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        return redirect()->back()->with('success', 'Booking Completed Successfully! Booking ID: ' . $bookingId);
    }
}
