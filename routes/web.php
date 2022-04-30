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



Route::get('/comics/{id}', function ($id){
    $comics = collect(config('myconfig.comics'));

    $selectedComic = $comics->firstWhere('id', $id);
    // $selectedComic = array_values($selectedComic->all())[0];

    return view('guest.template.comic', [
        'title'=> $selectedComic['title'] . 'lol' . $id,
        'comic'=> $selectedComic
    ]);
})->name('comic');



Route::get('/characters', function () {
    return view('guest.template.characters');
})->name('characters');
