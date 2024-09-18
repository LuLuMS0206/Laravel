<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\amenities;

class amenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generar 10 registros de amenities con su relación room
        amenities::factory()->count(10)->create();
    }
}
