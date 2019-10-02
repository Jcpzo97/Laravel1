<?php

use App\Libro;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    $libros = Libro::all();
    return view('welcome', compact('libros'));
});