<?php

use Illuminate\Support\Facades\Route;

Route::get('/','site\pagesController@index');
Route::get('/about','site\pagesController@about')->name('aboutPage');
Route::get('/terms','site\pagesController@terms')->name('termsPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


