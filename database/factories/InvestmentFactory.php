<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InvestmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::all()->random()->id, 
            'plan_id' => \App\Models\Plan::all()->random()->id,
            'wallet_id' => \App\Models\Wallet::all()->random()->id,
            'amount' => random_int(2000, 50000),
            'status' => $this->faker->randomElement($array = array ('suspended','pending', 'processing')),
            'duration' => $this->faker->randomElement($array = array ('6','12')),
            'interest' => random_int(500, 7000),
            'payout' => $this->faker->randomElement($array = array ('Annually','Weekly', 'Quaterly', 'Monthly', 'Half-Yearly'))
        ];
    }
}
