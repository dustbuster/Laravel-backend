<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookSeries extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'series_id',
        'book_id'
    ];

    public function series()
    {
        return $this->belongsTo(Series::class);
    }
    public function book()
    {
        return $this->belongsTo(Series::class);
    }
}
