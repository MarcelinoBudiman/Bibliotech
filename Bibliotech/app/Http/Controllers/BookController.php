<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    public function createHomePage(){
        $books = Book::paginate(4);

        return view('home')->with('books', $books);
    }

    public function createDetailPage($id){
        $book = Book::find($id);

        if($book!=null){
            return view('detail')->with('book', $book);
        }
        else return redirect()->back();
    }

    public function createAddPage(){
        return view('add_book');
    }

    public function createUpdatePage($id){
        $book = Book::find($id);

        if($book!=null){
            return view('update_book')->with('book', $book);
        }

        return redirect()->back();
    }

    public function searchBook(Request $request){
        $search_query = $request->query('q');
        $data = Book::where('title', "LIKE", "%$search_query%")->paginate(4);
        return view('home')->with('books', $data)->with('q', $search_query);
    }

    public function insertBook(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'unique:books,title|required',
            'author' => 'required',
            'publisher' => 'required',
            'release' => 'numeric|required|digits:4',
            'price' => 'numeric|required',
            'description' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->price = $request->price;
        $book->release = $request->release."-01-01";
        $book->description = $request->description;

        $file = $request->file('image');
        $imageName = 'NEW_'.$book->title.'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/images/', $file, $imageName);
        $book->image = $imageName;
        $book->save();

        session()->flash('message', 'Book successfully added!');
        return redirect()->back();
    }

    public function updateBook(Request $request, $id){

        $validator = Validator::make($request->all(),[
            'title' => ['required', Rule::unique('books')->ignore($id)],
            'author' => 'required',
            'publisher' => 'required',
            'release' => 'required',
            'price' => 'numeric|required',
            'description' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|nullable'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $book = Book::find($id);
        if($book != null){
            $book->title = ($request->title != null) ? $request->title : $book->title;
            $book->author = ($request->author != null) ? $request->author : $book->author;
            $book->publisher = ($request->publisher != null) ? $request->publisher : $book->publisher;
            $book->price = ($request->price != null) ? $request->price : $book->price;
            $book->release = ($request->release != null) ? $request->release."-01-01" : $book->release;
            $book->description = ($request->description != null) ? $request->description : $book->description;

            $file = $request->file('image');

            if($file != null){
                $imageName = 'NEW_'.$book->title.'.'.$file->getClientOriginalExtension();
                Storage::delete('public/images/'.$book->image);
                Storage::putFileAs('public/images/', $file, $imageName);
                $book->image = $imageName;
            }

            $book->save();
        }

        session()->flash('message', 'Update Successful!');
        return redirect()->back();
    }

    public function deleteBook($id){
        $book = Book::find($id);

        if($book != null){
            Storage::delete('public/images/'.$book->image);
            $book->delete();

            session()->flash('message', 'Book successfully deleted!');
            return redirect('home');
        }

        session()->flash('message', "Book doesn't exist!");
        return redirect()->back();
    }

}
