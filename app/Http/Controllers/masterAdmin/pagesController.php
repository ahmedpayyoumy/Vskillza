<?php

namespace App\Http\Controllers\masterAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    //call index page
    public function index(){
        return view('master_admin.pages.index');
    }
}
