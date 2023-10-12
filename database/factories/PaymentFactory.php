<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $paymentMethod = $this->faker->randomElement([
            'transfer', 'BNI', 'BRI',
            'BCA', 'Mandiri', 'OVO',
            'GoPay', 'Dana'
        ]);

        if ($paymentMethod === 'transfer') {
            $receiptImage = $this->faker->imageUrl(640, 480);
        } else {
            $receiptImage = null;
        }

        return [
            'order_id' => Order::inRandomOrder()->first()->id,
            'payment_method' => $paymentMethod,
            'payment_date' => now(),
            'receipt_image' => $receiptImage,
            'total_price' => $this->faker->numberBetween(75000, 1000000) * 25,
            'status' => $this->faker->randomElement(['pending', 'success', 'failed']),
        ];
    }
}
