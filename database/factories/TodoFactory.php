<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'todo' => $this->faker->text(50),
            'description' => $this->faker->text(),
            'completed' => $this->faker->boolean()
        ];
    }
}
