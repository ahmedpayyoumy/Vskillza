<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'career_admin'], function () {

    Route::get('/','careerAdmin\pagesController@index');

});
