<?php

use App\Book;

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

 Route::get('/', function (App\Book $book) {   //to se moze zakomentirati
    $books = Book::all();
    return view('welcome', compact('books'));

});

//Route::resource('books', 'BooksController')->middleware('auth');
Route::resource('books', 'BooksController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




/*Route::get('/', function()
{
    return View::make('pages.home');
});

Route::get('about', function()
{
    return View::make('pages.about');
});

Route::get('projects', function()
{
    return View::make('pages.projects');
});

Route::get('contact',  function()
{
    return View::make('pages.contact');
});*/



