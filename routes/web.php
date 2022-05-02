<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('guest.home');
})->name('home');
// passare i data dei dc



Route::get('/characters', function () {
    return view('guest.characters');
})->name('characters');


Route::get('/comics', function () {
    return view('guest.comics');
})->name('comics');



Route::get('/comics/{id}', function ($id){
    $comic = collect(config('myconfig.comics'));
    $selectedComic = $comic->firstWhere('id', $id);

    // controllo su numero id, se non esiste 404
    if (! $selectedComic) abort(404);

    // $selectedComic = array_values($selectedComic->all())[0];

    return view('guest.comic', [
        'title'=> $selectedComic['series'],
        'comic'=> $selectedComic
    ]);
})->name('comic');
