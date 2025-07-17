<?php

namespace App\Http\Services\Genre;

use App\Models\Book;

class Create
{
    public function __invoke(array $data): Genre
    {
        return Book::create([
            'name' => $data['name']
        ]);
    }
}
