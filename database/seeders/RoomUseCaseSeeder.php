<?php

namespace Database\Seeders;

use App\Models\RoomUseCase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomUseCaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoomUseCase::factory()->count(20)->create();
    }
}
