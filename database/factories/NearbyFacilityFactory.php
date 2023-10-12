<?php

namespace Database\Factories;

use App\Models\Building;
use App\Models\Facility;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NearbyFacility>
 */
class NearbyFacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'building_id' => Building::inRandomOrder()->first()->id,
            'facility_id' => Facility::inRandomOrder()->first()->id,
            'name' => $this->faker->words(3, true),
            'distance' => $this->faker->numberBetween(1, 10) * 100,
        ];
    }
}
