<?php

namespace App\Http\Services\Book;

use App\Models\Book;

class GetBook
{
    public function __invoke(array $data, Book $book): Book
    {
        if (is_null($book->id) && $book = Book::find($data['id'])) {
            $book = Book::first();
        }

        return $book;
    }
}
