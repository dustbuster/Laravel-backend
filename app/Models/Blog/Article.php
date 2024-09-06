<?php

namespace App\Models\Blog;

use App\Models\Library\Author;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public $fillable = [
        'title',
        'content',
        'topic',
        'tags',
        'author_id'
    ];
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
