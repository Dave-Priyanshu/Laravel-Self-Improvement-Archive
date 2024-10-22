<?php

namespace Database\Factories;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Animal::class;

    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'species'=>$this->faker->randomElement(['Dog', 'Cat', 'Bird', 'Horse', 'Rabbit']),
            'age'=>$this->faker->numberBetween(1,15),
        ];
    }
}
