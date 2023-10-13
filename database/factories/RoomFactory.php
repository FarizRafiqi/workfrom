<?php

namespace Database\Factories;

use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Spatie\OpeningHours\OpeningHours;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $openingHours = OpeningHours::create([
            'monday'     => ['09:00-12:00', '13:00-18:00'],
            'tuesday'    => ['09:00-12:00', '13:00-18:00'],
            'wednesday'  => ['09:00-12:00'],
            'thursday'   => ['09:00-12:00', '13:00-18:00'],
            'friday'     => ['09:00-12:00', '13:00-20:00'],
            'saturday'   => ['09:00-12:00', '13:00-16:00'],
            'sunday'     => [],
            'exceptions' => [
                '12-25'      => ['09:00-12:00'],   // Recurring on each 25th of December
            ],
        ]);

        $name = $this->faker->words(3, true);
        $slug = Str::slug($name);

        return [
            'building_id' => Building::inRandomOrder()->first()->id,
            'name' => $name,
            'slug' => $slug,
            'size' => $this->faker->numberBetween(1, 20) * 5, // m2
            'capacity' => $this->faker->numberBetween(1, 20) * 5,
            'price' => $this->faker->numberBetween(1, 20) * 50000,
            'description' => $this->faker->sentences(3, true),
            'lat' => $this->faker->latitude,
            'lng' => $this->faker->longitude,
            'address' => $this->faker->address,
            'opening_hours' => collect($openingHours)->toJson(),
        ];
    }
}
