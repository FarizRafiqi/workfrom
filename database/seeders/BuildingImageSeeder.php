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
        BuildingImage::insert([
            [
                'building_id' => 1,
                'image' => 'ns-1.png',
            ],
            [
                'building_id' => 2,
                'image' => 'ns-2.png',
            ],
            [
                'building_id' => 3,
                'image' => 'ns-3.png',
            ]
        ]);

        BuildingImage::factory()->count(17)->create();
    }
}
