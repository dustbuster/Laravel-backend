<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    /** @use HasFactory<\Database\Factories\Library/GenreFactory> */
    use HasFactory;
    public $fillable = [
        'name'
    ];
}
