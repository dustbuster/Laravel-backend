<?php

namespace Database\Factories\Library;

use App\Models\Photo;
use App\Models\Library\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Library\Book>
 */
class BookFactory extends Factory
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
            'cover_image_photo_id' => Photo::factory()->create()->id,
            'qr_code_hash' => fake()->md5(),
            'author_id' => Author::factory()->create()->id,
            'ibsn' => fake()->isbn13()
        ];
    }
}
