<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */ 
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'body' => $this->faker->paragraph,
            'userId' => $this->faker->unique()->numberBetween($min = 20, $max = 39),
        ];
    }

}
