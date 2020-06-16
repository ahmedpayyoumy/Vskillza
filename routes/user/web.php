<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'user_admin'], function () {

    Route::get('/','userAdmin\pagesController@index');

});
