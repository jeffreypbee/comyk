<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
            'user_id' => User::factory(),
            'publish_date' => fake()->date(),
            'title' => fake()->sentence(),
            'body' => fake()->paragraph(),
            'image' => fake()->imageUrl(),
            'postable_id' => 0,
            'postable_type' => fake()->word()
        ];
    }
}
