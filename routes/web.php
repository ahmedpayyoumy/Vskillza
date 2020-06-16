<?php

use Illuminate\Support\Facades\Route;

Route::get('/','site\pagesController@index');
Route::get('/about','site\pagesController@about')->name('aboutPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


