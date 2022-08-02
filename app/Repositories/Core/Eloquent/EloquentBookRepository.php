<?php

namespace App\Repositories\Core\Eloquent;

use App\Models\Book;
use App\Repositories\Contracts\BookRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;


class EloquentBookRepository extends BaseEloquentRepository implements BookRepositoryInterface
{
    public function entity() 
    {
        return Book::class;
    }

    public function search($request)
    {
        
    }
}