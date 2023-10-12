<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $time_start = Carbon::createFromFormat('H:i:s', $this->faker->time('H:i:s'));
        $time_end = $time_start->copy()->addHours($this->faker->numberBetween(1, 5));

        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'room_id' => Room::inRandomOrder()->first()->id,
            'visit_date' => $this->faker->dateTimeBetween('-1 month', '+1 month')->format('Y-m-d'),
            'time_start' => $time_start,
            'time_end' => $time_end,
            'duration' => $this->faker->numberBetween(1, 5),
            'total_price' => $this->faker->numberBetween(75000, 1000000) * 25,
            'note' => $this->faker->sentence,
            'order_date' => $this->faker->dateTimeBetween('-1 month', '+1 month')->format('Y-m-d'),
            'status' => $this->faker->randomElement(['pending', 'success', 'failed']),
        ];
    }
}
