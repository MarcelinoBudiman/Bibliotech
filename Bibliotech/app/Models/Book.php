<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;

    
    public function Library()
    {
        return $this->belongsTo(Library::class);
    }

    public function Queue()
    {
        return $this->belongsToMany(Queue::class);
    }
}
