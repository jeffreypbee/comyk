<?php

namespace Database\Factories;

use App\Models\ComicSeries;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ComicPost>
 */
class ComicPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comic_series_id' => ComicSeries::factory(),
            'page_number' => 1
        ];
    }
}
