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
}
