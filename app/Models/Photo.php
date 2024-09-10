<?php

namespace App\Models;

use App\Models\Blog\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;
    public $fillable = ['local_image_path', 's3_image_path'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
