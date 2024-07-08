<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //randomDigitNotZero sert a generer des chiffres de 1 a 9
        return [
            'category_id'=>fake()->randomDigitNotZero(),
            'name'=>fake()->word(15),
            'description'=>fake()->sentence(20),
            // randomFloat(2,20,200) sert a crée desnombre contenant 2 chiffre avant la , le plus petit sera 2à et le plus grand ser200
            'price'=>fake()->randomFloat(2,20,200),
        ];
    }
}
