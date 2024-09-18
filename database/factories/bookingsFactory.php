<?php

namespace Database\Factories;

use App\Models\bookings;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookings>
 */
class bookingsFactory extends Factory
{
    protected $model = bookings::class;

    public function definition(): array
    {
        return [
            'guest' => $this->faker->name(), // Genera un nombre falso para el huésped
            'check_in' => $this->faker->dateTimeBetween('-1 week', '+1 week')->format('Y-m-d H:i:s'), // Genera una fecha de check-in falsa
            'check_out' => $this->faker->dateTimeBetween('+1 week', '+2 weeks')->format('Y-m-d H:i:s'), // Genera una fecha de check-out falsa
            'room_type' => $this->faker->randomElement(['Single', 'Double', 'Suite']), // Genera un tipo de habitación falso
            'special_request' => $this->faker->sentence(), // Genera una solicitud especial falsa
            'status' => $this->faker->randomElement(['In progress', 'Check In', 'Check Out']), // Genera un estado falso
            'order_date' => $this->faker->date('Y-m-d'), // Genera una fecha de pedido falsa
        ];
    }
}
