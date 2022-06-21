<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function latest()

    {

        $selection = Book::with('authors')->orderBy('publication_date', 'desc')->limit(10)->get();
       
        // create array with less data using loop and return it in response

        //
        
        return $selection;
}
}