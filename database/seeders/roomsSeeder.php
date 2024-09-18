<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\rooms;

class roomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generar 10 registros de habitaciones usando el factory
        rooms::factory()->count(10)->create();
    }
}
