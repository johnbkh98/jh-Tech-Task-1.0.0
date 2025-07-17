<?php

namespace App\Http\Services\Book;

use App\Models\Book;

class AddGenre
{
    public function __invoke(array $data, Book $book): void
    {
        $book->attach($data['genre']);
    }
}
