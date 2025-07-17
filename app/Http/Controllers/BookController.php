<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\DestroyRequest;
use App\Http\Requests\Book\IndexRequest;
use App\Http\Requests\Book\StoreRequest;
use App\Http\Requests\Book\UpdateRequest;
use App\Http\Requests\Book\GetBookRequest;
use App\Http\Requests\Book\AddGenreRequest;
use App\Http\Services\Book\Destroy;
use App\Http\Services\Book\Index;
use App\Http\Services\Book\Store;
use App\Http\Services\Book\Update;
use App\Http\Services\Book\GetBook;
use App\Http\Services\Book\AddGenre;
use App\Models\Book;

class BookController extends Controller
{
    public function index(IndexRequest $request, Index $index)
    {
        return response()->json([
            'message' => 'Successfully fetched the books.',
            'data' => $index()
        ]);
    }

    public function indexPage(IndexRequest $request, Index $index)
    {
        return view('welcome', [
            'data' => $index()
        ]);
    }

    public function editPage(IndexRequest $request, Index $index)
    {
        return view('edit', [
            'data' => $index()
        ]);
    }

    public function store(StoreRequest $request, Store $store)
    {
        $book = $store($request->validated());

         return response()->json([
            'message' => 'Successfully stored the book.',
            'data' => $book
        ]);
    }

    public function update(UpdateRequest $request, Update $update, Book $bookToUpdate)
    {
        $updatedBook = $update($request->validated(), $bookToUpdate);

        return response()->json([
            'message' => 'Successfully updated the book.',
            'data' => $updatedBook
        ]);
    }

    public function getBook(GetBookRequest $request, GetBook $getBook, Book $book)
    {
        $book = $getBook($request->validated(), $book);

        return response()->json([
            'message' => 'Successfully retrieved book.',
            'data' => $book
        ]);
    }

    public function addGenres(AddGenreRequest $request, AddGenre $create, Book $book)
    {
        $genre($request->validated());

        return response()->json([
            'message' => 'Successfully created genre',
        ]);
    }

    public function destroy(DestroyRequest $request, Destroy $destroy, Book $book)
    {
        $destroy($book);

        return response()->json([
            'message' => 'Successfully deleted the book.',
        ]);
    }
}
