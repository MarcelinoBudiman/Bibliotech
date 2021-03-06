<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    use HasFactory;

    protected $table = "Queue";
    public $timestamps = false;

    public function Library()
    {
        return $this->belongsTo(Library::class);
    }
}
