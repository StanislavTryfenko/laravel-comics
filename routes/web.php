<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $comics = config('comics');
    $comicsCollection = collect($comics);
    $data = [
        'comics' => $comicsCollection,
    ];

    return view('home', $data);
});

//testing failed
/* $comics = config('comics');
foreach ($comics as $comic) {
    Route::get("{$comic['series']}", function () {
        

        return view('aquaman', compact('comic'));
    })->name("comic.{$comic['series']}");
} */

Route::get('/aquaman', function () {

    $comics = config('comics');
    $comicsCollection = collect($comics);
    $aquaman = $comicsCollection->filter(fn ($comic) => $comic['series'] == 'Aquaman');
    $data = [
        'aquaman' => $aquaman,
    ];
    
    return view('aquaman', $data);  
})->name('comic.aquaman');

