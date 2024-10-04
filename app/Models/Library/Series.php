<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    /** @use HasFactory<\Database\Factories\Library/SeriesFactory> */
    use HasFactory;
    public $fillable = [
        'title',
        'series_id'
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_series');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'series_genres');
    }
}
