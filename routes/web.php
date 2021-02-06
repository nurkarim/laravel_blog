<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/{any}', function () {
    return view('layouts.app');
})->where('any', '.*');

Auth::routes();

Route::get('/homeh', 'HomeController@index')->name('home');
