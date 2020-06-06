<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site_pages.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
