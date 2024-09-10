<?php

namespace App\Http\Controllers\Blog;

use App\Models\Blog\Article;
use Illuminate\Routing\Controller;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    private $relations = ['author', 'photo'];
    // Display a listing of the posts (GET /api/posts)
    public function index()
    {
        $articles = Article::with($this->relations)->get();
        return response()->json($articles);
    }

    // Store a newly created post in storage (POST /api/posts)
    public function store(ArticleRequest $request)
    {
        $article = Article::create($request);

        return response()->json([
            'message' => 'Post created successfully.',
            'post' => $article->load($this->relations)
        ], 201);
    }

    // Display the specified post (GET /api/posts/{id})
    public function show($articleId)
    {
        return response()->json(Article::find($articleId)->load($this->relations));
    }

    // Update the specified post in storage (PUT/PATCH /api/posts/{id})
    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->all());
        return response()->json([
            'message' => 'Article updated successfully.',
            'post' => $article->load($this->relations)
        ]);
    }

    // Remove the specified post from storage (DELETE /api/posts/{id})
    public function destroy(Article $article)
    {
        $article->delete();

        return response()->json([
            'message' => 'article deleted successfully.'
        ]);
    }
}
