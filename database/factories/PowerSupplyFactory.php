<?php

namespace Database\Factories;

use App\Models\Computer;
use Illuminate\Database\Eloquent\Factories\Factory;

class PowerSupplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lexify('XPG ???'),
            'capacity' => 650,
            'modularity' => 'ALL',
            'quality' => '80 GOLD',

            'computer_id' => Computer::factory()
        ];
    }
}
