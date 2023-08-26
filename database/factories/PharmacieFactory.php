<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pharmacie>
 */
class PharmacieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' =>$this->faker->name(),
            'region' => $this->faker->word(),
            'prefecture' =>  $this->faker->name(),
            'quartier' =>  $this->faker->name(),
            'telephone' =>$this->faker->phoneNumber(),
            
        ];
    }
}
