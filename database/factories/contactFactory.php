<?php

namespace Database\Factories;

use App\Models\contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class contactFactory extends Factory
{
    protected $model = contact::class;

    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),  // Genera una fecha falsa
            'client_name' => $this->faker->name(),  // Genera un nombre de cliente falso
            'client_email' => $this->faker->email(),  // Genera un email de cliente falso
            'client_phone' => $this->faker->phoneNumber(),  // Genera un teléfono de cliente falso
            'subject' => $this->faker->sentence(),  // Genera un asunto falso
            'comment' => $this->faker->paragraph(),  // Genera un comentario falso
            'status' => $this->faker->randomElement(['public', 'archived']),  // Genera un estado falso
        ];
    }
}
