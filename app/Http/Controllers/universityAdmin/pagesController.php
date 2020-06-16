<?php

namespace App\Http\Controllers\universityAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    //call index page
    public function index(){
        return view('university_admin.pages.index');
    }
}
