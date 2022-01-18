<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table="transaction";
    protected $guarded=[];

    public function transactionDetail(){
        return $this->hasMany(transactionDetail::class,"transaction_id","id");
    }

    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
}
