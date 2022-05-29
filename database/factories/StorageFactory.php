<?php

namespace Database\Factories;

use App\Models\Computer;
use Illuminate\Database\Eloquent\Factories\Factory;

class StorageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lexify('SAMSUNG ???'),
            'size' => '1000',
            'type' => 'SSD',

            'computer_id' => Computer::factory()
        ];
    }
}
