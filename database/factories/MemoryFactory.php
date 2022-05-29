<?php

namespace Database\Factories;

use App\Models\Computer;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lexify('CORSAIR ???'),
            'type' => 'DDR4',
            'speed' => '3200',

            'computer_id' => Computer::factory()
        ];
    }
}
