<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table="transaction_detail";
    protected $guarded=[];

    public function transaction(){
        return $this->belongsTo(transaction::class,"transaction_id","id");
    }
}
