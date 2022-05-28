<?php

namespace Database\Factories;

use App\Models\Sef;
use Illuminate\Database\Eloquent\Factories\Factory;

class RadnikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'firma' => $this->faker->company(),
            'zanat' => $this->faker->randomElement($array = array('Zidar', 'Armirač', 'Keramičar', 'Parketar', 'Tesar', 'Stolar', 'Moler')),
            'sef_id' => Sef::factory()
        ];
    }
}
