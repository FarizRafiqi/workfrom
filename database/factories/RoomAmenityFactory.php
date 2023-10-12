<?php

namespace Database\Factories;

use App\Models\Amenity;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoomAmenity>
 */
class RoomAmenityFactory extends Factory
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
            'amenity_id' => Amenity::inRandomOrder()->first()->id,
        ];
    }
}
