<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;
use DB;


class BookController extends Controller
{
    public function index()
    {
        $authors = Author::limit(20)
               ->get();
              
        
        return view('admin/books', compact('authors'));
    }

    public function create()
    {
       $book = new Book;
       
     return view('admin/create-book', compact('book'));
    }
 
    public function store(Request $request)
    {
       $book = new Book;
 
       $book->title = $request->input("title");
       $book->language = $request->input("language");
       $book->slug = $request->input("title")."-book";
 
       $book->save();
       session()->flash("success_message", "Book saved");
 
       
     return redirect(url(route('create-book')));
    }
}
