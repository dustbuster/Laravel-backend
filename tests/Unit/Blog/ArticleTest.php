<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Blog\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ArticleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     */
    public function test_database_interaction(): void
    {
        $article = Article::factory()->create([
            'title' => 'Super Awesome Test Article',
        ]);

        $article = Article::where('title', 'Super Awesome Test Article')->first();
        $this->assertEquals('Super Awesome Test Article', $article->title);
    }
}
