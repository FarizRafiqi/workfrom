<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            UserSeeder::class,
            BuildingSeeder::class,
            BuildingImageSeeder::class,
            RoomSeeder::class,
            RoomImageSeeder::class,
            AmenitySeeder::class,
            RoomAmenitySeeder::class,
            UseCaseSeeder::class,
            RoomUseCaseSeeder::class,
            OrderSeeder::class,
            PaymentSeeder::class,
            FacilitySeeder::class,
            NearbyFacilitySeeder::class
        ]);
    }
}
