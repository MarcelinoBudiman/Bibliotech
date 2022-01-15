<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function createHomePage(){
        $books = Book::paginate(8);

        return view('home')->with('books', $books);
    }


}
