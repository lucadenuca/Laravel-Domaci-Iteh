<?php

namespace Database\Factories;

use App\Models\Gradiliste;
use Illuminate\Database\Eloquent\Factories\Factory;

class SefFactory extends Factory
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
            'specijalnost' => $this->faker->randomElement($array = array('Zidar', 'Armirač', 'Keramičar', 'Parketar', 'Tesar', 'Stolar', 'Moler')),
            'gradiliste_id' => Gradiliste::factory()
        ];
    }
}
