<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'user_id' => 1,
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'description' => fake()->paragraph(),
            'image' => fake()->imageUrl(),
            'views' => fake()->randomNumber(),
            'is_featured' => fake()->boolean(),
            'status' => fake()->randomElement(['draft', 'published']),
        ];
    }
}
