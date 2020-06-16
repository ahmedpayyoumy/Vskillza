<?php

namespace App\Http\Controllers\careerAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    //call index page
    public function index(){
        return view('career_admin.pages.index');
    }
}
