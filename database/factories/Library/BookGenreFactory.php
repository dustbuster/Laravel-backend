<?php

namespace Database\Factories\Library;

use App\Models\Library\Book;
use App\Models\Library\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookGenre>
 */
class BookGenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => Book::factory()->create()->id,
            'genre_id' => Genre::factory()->create()->id
        ];
    }
}
