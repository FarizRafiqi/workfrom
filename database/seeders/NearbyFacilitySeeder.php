<?php

namespace Database\Seeders;

use App\Models\NearbyFacility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NearbyFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NearbyFacility::factory()->count(20)->create();
    }
}
