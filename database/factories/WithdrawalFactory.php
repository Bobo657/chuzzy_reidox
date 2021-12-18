<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WithdrawalFactory extends Factory
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
            'amount' => random_int(2000, 50000),
            'wallet_type' => $this->faker->randomElement($array = array ('Bitcoin','Etherum','Tether')),
            'wallet_address' => $this->faker->md5,
            'from' => $this->faker->randomElement($array = array ('Non compounding Profit','Referral Profit')),
            'status' => $this->faker->randomElement($array = array ('suspended','pending', 'processing'))
        ];
    }
}
