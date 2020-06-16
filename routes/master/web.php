<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'master_admin'], function () {

    Route::get('/','masterAdmin\pagesController@index');

});
