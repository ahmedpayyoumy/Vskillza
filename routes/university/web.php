<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'university_admin'], function () {

    Route::get('/','universityAdmin\pagesController@index');

});
