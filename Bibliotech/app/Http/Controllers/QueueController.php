<?php

namespace App\Http\Controllers;

use App\Models\Library;
use App\Models\Queue;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    //
    public function createQueue($userId, $libraryId){
        $libraries = Library::paginate(4);
        $newQueue = new Queue();
        $newQueue->library_id = $libraryId;
        $newQueue->user_id = $userId;

        $temp = null;
        $temp = Queue::where("user_id",$userId)->get();
        if($temp == null){
            $newQueue->save();

        }

        return view('queue')
        ->with('libraries',$libraries)
        ;
 
    }
}
