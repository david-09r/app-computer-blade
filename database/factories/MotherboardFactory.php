<?php

namespace Database\Factories;

use App\Models\Computer;
use Illuminate\Database\Eloquent\Factories\Factory;

class MotherboardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lexify('ASUS ???'),
            'socket' => 'AM4',
            'type' => 'ATX',

            'computer_id' => Computer::factory()
        ];
    }
}
