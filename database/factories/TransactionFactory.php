<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userID' => $this->faker->numberBetween(2, 13),
            'courseID' => $this->faker->numberBetween(1, 5),
            'token' => Str::random(10),
            'acceptorID' => 1,
            'totalPrice' => $this->faker->randomFloat(2, 10, 100),
            'status' => Arr::random(Transaction::STATUS_VALUES),
            'midtrans_url' => $this->faker->url(),
            'midtrans_booking_code' => Str::random(10),
        ];
    }
}
