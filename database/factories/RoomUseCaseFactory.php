<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\UseCase;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoomUseCase>
 */
class RoomUseCaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_id' => Room::inRandomOrder()->first()->id,
            'use_case_id' => UseCase::inRandomOrder()->first()->id,
        ];
    }
}
