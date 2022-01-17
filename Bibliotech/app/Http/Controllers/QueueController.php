<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueueController extends Controller
{
    //
    public function createQueuePage(){
        return view('queue');
 
    }
}
