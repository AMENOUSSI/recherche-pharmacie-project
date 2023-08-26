<?php

namespace Database\Factories;

use App\Models\Pathologie;
use App\Models\Pharmacie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->name(),
            'date_fabrication'=>$this->faker->dateTime(),
            'date_expiration'=>$this->faker->dateTime(),
            'description'=>$this->faker->sentence(),
            'categorie'=>$this->faker->name(),
            'prix' =>$this->faker->randomFloat(2, 10, 1000),
            'pharmacie_id'=>Pharmacie::all()->random()->id,
          
        ];
    }
}
