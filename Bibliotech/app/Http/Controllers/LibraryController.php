<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    //
    public function createLibraryPage(){
        $libraries = Library::paginate(4);
        return view('queue') 
        ->with('libraries',$libraries)
        ;
 
    }
}
