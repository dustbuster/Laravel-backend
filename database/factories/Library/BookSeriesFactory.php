<?php

namespace Database\Factories\Library;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Library\BookSeries>
 */
class BookSeriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'genre' => fake()->enum(['Sci-fi', 'Fantasy', 'Mystery', 'Thriller', 'Romance']),
        ];
    }
}
