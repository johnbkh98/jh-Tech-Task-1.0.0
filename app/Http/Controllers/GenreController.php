<?php

namespace App\Http\Controllers;

use App\Http\Requests\Genre\CreateRequest;
use App\Http\Services\Genre\Create;
use App\Models\Book;

class BookController extends Controller
{
    public function create(CreateRequest $request, Create $create)
    {
        $genre($request->validated());

        return response()->json([
            'message' => 'Successfully created genre',
        ]);
    } 
}
