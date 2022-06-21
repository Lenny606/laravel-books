<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use App\Models\User;
use Auth;

class BookdetailController extends Controller
{
    //
    public function show($id)
    {

        $detail = Book::where('id', $id)->first();
        
        
        return view("books/book-detail", compact('detail'));
    }

    public function store(Request $request)

    {

        $review = new Review;
        $user = Auth::user();
       
        $review->text = $request->input('text');
        $review->book_id = $request->input('book_id');
        $review->user_id = $user->id;
        
        $review->save();

        session()->flash("success_message", "Review saved");

        return redirect(url(route('homepage')));
    }

}
