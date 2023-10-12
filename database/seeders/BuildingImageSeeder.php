<?php

namespace Database\Seeders;

use App\Models\BuildingImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildingImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BuildingImage::factory()->count(20)->create();
    }
}
