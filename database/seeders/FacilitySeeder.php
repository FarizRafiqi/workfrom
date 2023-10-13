<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facility::insert([
            [
                'name' => 'Train',
                'icon' => 'bi bi-train-front',
            ],
            [
                'name' => 'Hospital',
                'icon' => 'bi bi-hospital',
            ],
            [
                'name' => 'Gym',
                'icon' => 'fas fa-dumbbell',
            ],
            [
                'name' => 'Taxi',
                'icon' => 'bi bi-taxi-front',
            ],
            [
                'name' => 'Mall',
                'icon' => 'bi bi-shop',
            ],
            [
                'name' => 'Resto',
                'icon' => 'fa fa-utensils',
            ],
            [
                'name' => 'Hotel',
                'icon' => 'fa fa-hotel',
            ],
            [
                'name' => 'Bar',
                'icon' => 'fas fa-glass-cheers',
            ],
            [
                'name' => 'Cafe',
                'icon' => 'bi bi-cup',
            ],
        ]);

        // Facility::factory()->count(20)->create();
    }
}
