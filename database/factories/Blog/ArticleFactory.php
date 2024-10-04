<?php

namespace Database\Factories\Blog;

use App\Models\Photo;
use App\Models\Blog\Article;
use App\Models\Library\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    // use RefreshDatabase;
    protected $model = Article::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(),
            'topic' => fake()->word(),
            'tags' => json_encode(fake()->words(3)),
            'author_id' => Author::factory()->create()->id,
            'photo_id' => Photo::factory()->create()->id,
        ];
    }
}
