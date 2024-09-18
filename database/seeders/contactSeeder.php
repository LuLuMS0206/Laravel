<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\contact;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generar 10 registros de contacto usando el factory
        contact::factory()->count(10)->create();
    }
}
