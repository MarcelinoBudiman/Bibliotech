<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'capacity',
        
    ];

    protected $table = "library";
    

    public function Book()
    {
        return $this->hasMany(Book::class);
    }

    public function Queue()
    {
        return $this->hasMany(Queue::class);
    }
}
