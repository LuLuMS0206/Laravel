<?php

namespace Database\Factories;

use App\Models\rooms;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class roomsFactory extends Factory
{
    protected $model = rooms::class;

    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(),  // Genera una URL de imagen falsa
            'room_number' => $this->faker->unique()->numerify('Room ###'),  // Genera un número de habitación
            'room_type' => $this->faker->randomElement(['single', 'double', 'suite']),  // Genera un tipo de habitación aleatorio
            'price' => $this->faker->numberBetween(100, 500),  // Genera un precio entre 100 y 500
            'offer_price' => $this->faker->numberBetween(80, 400),  // Genera un precio de oferta
            'status' => $this->faker->randomElement(['available', 'booked']),  // Genera el estado de la habitación
            'availability' => $this->faker->randomElement(['available', 'unavailable']),  // Genera la disponibilidad
        ];
    }
}
