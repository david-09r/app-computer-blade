<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone_number' => $this->faker->numberBetween(500000, 5000000),
            'payment_method' => $this->faker->creditCardType,
            'email' => $this->faker->email,
            'password' => $this->faker->password,
            'position' => $this->faker->word
        ];
    }
}
