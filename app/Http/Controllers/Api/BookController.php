<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Repositories\Contracts\BookRepositoryInterface;

class BookController extends Controller
{
    protected $book;

    public function __construct(BookRepositoryInterface $bookInterface) {
        $this->middleware('auth:api');
        $this->book = $bookInterface;
    }

    public function store(BookRequest $bookRequest) 
    {
        $book = $this->book->store($bookRequest->all());
        return response()->json($book);
    }

    public function update(BookRequest $request) 
    {
        $book = $this->book->update($request);
        return response()->json($book);
    }

    public function delete($id)
    {
        $response = $this->book->delete($id);
        return response()->json($response);
    }

    public function show($id = null)
    {
        if ($id != null) {
            $response = $this->book->getEntity($id);
        } else {
            $response = $this->book->getAll();
        }
        return response()->json($response);
    }
}