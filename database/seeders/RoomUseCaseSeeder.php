<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\RoomUseCase;
use App\Models\UseCase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomUseCaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = Room::all();

        foreach ($rooms as $room) {
            $useCases = UseCase::inRandomOrder()->where('parent_id', '!=', null)->limit(3)->get();
            foreach ($useCases as $useCase) {
                RoomUseCase::create([
                    'room_id' => $room->id,
                    'use_case_id' => $useCase->id,
                ]);
            }
        }

//        RoomUseCase::factory()->count(20)->create();
    }
}
