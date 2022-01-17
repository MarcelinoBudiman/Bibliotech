<?php

namespace App\Http\Controllers;
use App\Models\Book as Books;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function createCartPage(){
        return view('cart');
    }

    public function createCheckoutPage(){
        return view('checkout');
    }
    public function addToCart($id){
        $books = Books::find($id);

        if(!$books) {
            abort(404);
        }

        $cart = session()->get('cart');

        if(!$cart) {
            $cart = [
                $id => [
                    "title" => $books->title,
                    "author" => $books->author,
                    "price" => $books->price,
                    "image" => Storage::url('public/images/'.$books->image),

                ]
            ];
            session()->put('cart', $cart);

            return redirect()->back();
        }

        $cart[$id] = [
            "title" => $books->title,
            "author" => $books->author,
            "price" => $books->price,
            "image" => Storage::url('public/images/'.$books->image)
        ];

        session()->put('cart', $cart);

        return redirect()->back();
    }

}
