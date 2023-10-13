<?php

namespace Database\Seeders;

use App\Models\Amenity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Amenity::insert([
            [
                'name' => 'High Speed Internet',
                'icon' => 'bi bi-wifi'
            ],
            [
                'name' => 'Front Desk Service',
                'icon' => 'bi bi-person-lines-fill'
            ],
            [
                'name' => 'Events & Meeting Rooms',
                'icon' => 'bi bi-calendar-event'
            ],
            [
                'name' => 'Mail & Package Handling',
                'icon' => 'bi bi-envelope'
            ],
            [
                'name' => 'Printing Services',
                'icon' => 'bi bi-printer'
            ],
            [
                'name' => 'Access to Common Areas',
                'icon' => 'bi pin-map'
            ],
            [
                'name' => 'Walk in Pantries',
                'icon' => 'fas fa-utensils'
            ],
            [
                'name' => 'Mineral Water, Coffee, & Tea',
                'icon' => 'bi bi-cup'
            ]
        ]);
    }
}
