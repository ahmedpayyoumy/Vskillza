<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    //start preview index page
    public function index(){
    	$data['title'] = "Home Page";
    	return view('site_pages.pages.index.index')->with('data',$data);
    }

    //start preview about page
    public function about(){
    	$data['title'] = "About Page";
    	return view('site_pages.pages.about.about')->with('data',$data);
    }

    //start terms & Conditions page
    public function terms(){
        $data['title'] = "Terms & Conditions Page";
        return view('site_pages.pages.terms.terms')->with('data',$data);
    }

    //start Register page
    public function register(){
        $data['title'] = "Register Page";
        return view('site_pages.pages.register.register')->with('data',$data);
    }
}
