<?php

namespace Database\Factories;

use App\Models\Computer;
use Illuminate\Database\Eloquent\Factories\Factory;

class GraphicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lexify('GEFORCE ???'),
            'manufacture' => 'NVIDIA',

            'computer_id' => Computer::factory()
        ];
    }
}
