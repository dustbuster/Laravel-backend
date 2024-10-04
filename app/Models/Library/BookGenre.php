<?php

namespace App\Models\Library;

use App\Models\Library\Book;
use App\Models\Library\Genre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookGenre extends Model
{
    /** @use HasFactory<\Database\Factories\BookGenreFactory> */
    use HasFactory;

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
