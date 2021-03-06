<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueueController;
use App\Http\Controllers\LibraryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//LIBRARY
Route::get('/library', [LibraryController::class, 'createLibraryPage']);

//QUEUE
Route::get('/addtoqueue/{userId}/{libraryId}', [QueueController::class, 'createQueue']);


Route::get('/', [BookController::class, 'createHomePage']);

//LOGIN
Route::get('/login', [UserController::class, 'createLoginPage'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'storeSession']);
Route::post('/logout', [UserController::class, 'destroySession']);

//REGISTER
Route::get('/register', [UserController::class, 'createRegisterPage'])->middleware('guest');
Route::post('/register', [UserController::class, 'storeUser']);

//HOME
Route::get('/home', [BookController::class, 'createHomePage']);
Route::get('/search', [BookController::class, 'searchBook']);

//BOOK
Route::get('detail/{id}', [BookController::class, 'createDetailPage']);
Route::get('add-book-page', [BookController::class, 'createAddPage']);
Route::post('add-book', [BookController::class, 'insertBook']);
Route::get('update-book-page/{id}', [BookController::class, 'createUpdatePage']);
Route::post('update-book/{id}', [BookController::class, 'updateBook']);
Route::delete('delete-book/{id}', [BookController::class, 'deleteBook']);

//BORROW
Route::get('/borrow', function () {
    return view('borrow');
});

//AboutUs
Route::get('/about-us', function () {
    return view('about_us');
});

//CART
Route::get('/cart',[CartController::class,'createCartPage']);
Route::get('/cart/{id}',[CartController::class,'addToCart']);
Route::get('/checkout',[CartController::class,'createCheckoutPage']);

//HISTORY
Route::get('/history',[TransactionController::class,'viewHistory']);
Route::post('/addTransaction',[TransactionController::class,'addTransaction']);
