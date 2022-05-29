<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Assembler;
use App\Models\Seller;
use App\Models\User;

class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_purchase' => $this->faker->dateTime(),
            'date_delivery' => $this->faker->dateTime(),
            'date_assembly' => $this->faker->dateTime(),

            'assembler_id' => Assembler::factory(),
            'seller_id' => Seller::factory(),
            'user_id' => User::factory(),
        ];
    }
}
