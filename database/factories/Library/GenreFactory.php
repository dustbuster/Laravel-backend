<?php

namespace Database\Factories\Library;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Library\Genre>
 */
class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->enum(['Sci-fi', 'Fantasy', 'Mystery', 'Thriller', 'Romance'])
        ];
    }
}
