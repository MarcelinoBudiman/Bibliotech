<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    //
    public function createLibraryPage(){
        $libraries = Library::paginate(8);
        return view('queue') 
        ->with('libraries',$libraries)
        ;
 
    }
}
