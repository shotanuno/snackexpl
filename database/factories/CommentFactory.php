<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->word,
            'body' => fake()->text($maxNbChars = 30),
            'rating' => RANDOM(1, 5),
            'snack_id' => RANDOM(1, 100),
            'user_id' => RANDOM(1,3),
        ];
    }
}
