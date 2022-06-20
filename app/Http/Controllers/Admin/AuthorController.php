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
         
    return view('index/index', compact('authors'));
   }

   public function create()
   {
      
         
    return view('index/index', compact(''));
   }

}
