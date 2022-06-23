<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Bookshop;

class BookshopController extends Controller
{
    //handles bookshop detail with list of books - intermadiate table book_bookshop
    public function show($bookshop_id)
    {

       $bookshop = Bookshop::where('id', $bookshop_id)->first();
       $books = Book::get();

 

        return view('bookshop/view', compact('bookshop'));
    }
}
