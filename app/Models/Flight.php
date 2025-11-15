<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
     protected $fillable = [
        'airline_id',
        'departure_airport_id',
        'arrival_airport_id',
        'flight_type_id',
        'departure_time',
        'arrival_time',
        'price'
    ];

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function departureAirport()
    {
        return $this->belongsTo(Airports::class, 'departure_airport_id');
    }

    public function arrivalAirport()
    {
        return $this->belongsTo(Airports::class, 'arrival_airport_id');
    }
}
