<?php

namespace Database\Seeders;

use App\Models\RoomAmenity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomAmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoomAmenity::factory()->count(20)->create();
    }
}
