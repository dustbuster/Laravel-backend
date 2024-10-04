<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $fillable = [
        'title',
        'genre',
        'cover_image_photo_id',
        'qr_code_hash',
        'author_id',
        'ibsn'
    ];
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function series()
    {
        return $this->belongsToMany(Series::class, 'book_series');
    }
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_series');
    }
}
