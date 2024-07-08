<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //pour afficher des nom identique sur l'image et le nom mettre le la fonction dans une variable
        $name= fake()->words(7,true);
        return [
            'name'=>$name,
            'image'=>fake()->imageUrl(640,480,$name,true)
        ];
    }
}
