<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use App\Genre;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function genres(): hasMany
    {
        return $this->hasMany(Genre::class, 'genre_id');
    }
}
