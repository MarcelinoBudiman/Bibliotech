<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    //
    public function createLibraryPage(){
        $library = Library::paginate(4);
        return view('queue') 
        ->with('library',$library)
        ;
 
    }
}
