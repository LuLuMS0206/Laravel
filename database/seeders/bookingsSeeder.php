<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\bookings;

class bookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear 10 reservas usando el factory
        bookings::factory()->count(10)->create();
    }
}
