<?php

namespace App\Http\Controllers\userAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    //call index page
    public function index(){
        return view('user_admin.pages.index');
    }
}
