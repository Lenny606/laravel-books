<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
   public function index()
   {
      $authors = Author::limit(20)
               ->get();
         
    return view('admin/authors', compact('authors'));
   }

   public function create()
   {
      $author = new Author;
      
    return view('admin/create', compact('author'));
   }

   public function store(Request $request)
   {
      $author = new Author;

      $author->name = $request->input("name");
      $author->bio = $request->input("bio");
      $author->slug = $request->input("name")."-author";

      $author->save();
      session()->flash("success_message", "Author saved");

      
    return redirect(url(route('create')));
   }

}
