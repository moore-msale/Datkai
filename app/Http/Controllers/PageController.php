<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.main');
    }
    public function catalog(){
        return view('pages.catalog');
    }
    public function aboutUs(){
        return view('pages.about_us');
    }
    public function innerProduct(){
        return view('pages.inner_product');
    }
}
