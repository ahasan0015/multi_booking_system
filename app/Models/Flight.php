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
}
