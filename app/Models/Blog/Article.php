<?php

namespace App\Models\Blog;

use App\Models\Photo;
use App\Models\Library\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'content',
        'topic',
        'tags',
        'author_id',
        'photo_id'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }
}
