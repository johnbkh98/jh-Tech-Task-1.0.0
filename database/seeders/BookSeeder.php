<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::truncate();

        $books = Book::factory()
            ->count(5)
            ->create();

        $books->each(function ($book) {
            $book->rating = rand(1, 10);
            $book->save();
        });
    }
}
