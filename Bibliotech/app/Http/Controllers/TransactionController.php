<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Transaction as Transaction;
use App\Models\TransactionDetail as TransactionDetail;
use Illuminate\Http\Request;
use Carbon\Carbon;


class TransactionController extends Controller
{
    public function viewHistory(){

        $transaction = Transaction::all();
        $transactionDetail = TransactionDetail::all();
        return view('transaction_history')->with('transaction',$transaction)->with('transactionDetail',$transactionDetail);
    }

    public function addTransaction(Request $request){
        $validator = Validator::make($request->all(),[


            'card_number' => 'required|min:10'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }


        $transaction = new Transaction();

        $date = date('Y-m-d');


        $transaction->borrow_date = $date;
        $transaction->return_date =  $request->return_date;

        $transaction->user_id = auth()->user()->id;

        if($request->payment_method == 'credit'){
            $transaction->payment_method = 'credit';
        }
        elseif ($request->payment_method == 'debit')   {
            $transaction->payment_method = 'debit';
        }

        $transaction->card_number = $request->card_number;
        $transaction->name = auth()->user()->name;

        //calculate total price
        foreach(session()->get('cart') as $details){
            $transaction->total_price += $details['price'];
        }

        $transaction->save();

        foreach(session()->get('cart') as $details){
            $transaction_detail = new TransactionDetail();
            $transaction_detail->transaction_id = $transaction->id;
            $transaction_detail->title = $details['title'];
            $transaction_detail->author = $details['author'];
            $transaction_detail->price = $details['price'];
            $transaction_detail->image = $details['image'];
            $transaction_detail->save();

        }

        $request->session()->forget('cart');
        return view('cart');
    }

}
