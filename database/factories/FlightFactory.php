<?php

namespace Database\Factories;

use App\Models\Airline;
use App\Models\Airports;
use App\Models\FlightType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
     
        return [
            'airline_id' => Airline::inRandomOrder()->first()->id ?? 1,
            'departure_airport_id' => Airports::inRandomOrder()->first()->id ?? 1,
            'arrival_airport_id' => Airports::inRandomOrder()->skip(1)->first()->id ?? 2,
            'flight_type_id' => FlightType::inRandomOrder()->first()->id ?? 1,
            'departure_time' => $this->faker->dateTimeBetween('+1 days', '+5 days'),
            'arrival_time' => $this->faker->dateTimeBetween('+6 days', '+10 days'),
            'price' => $this->faker->randomFloat(2, 5000, 20000),
        ];
    }
}
