<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradilisteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'adresa' => $this->faker->streetName(),
            'grad' => $this->faker->city(),
            'investitor' => $this->faker->name(),
            'broj_radnika' => $this->faker->numberBetween($min = 3, $max = 350)
        ];
    }
}
