<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function about(){
        return view('theme.about',get_defined_vars());
    }
    public function contact(){
        return view('theme.contact',get_defined_vars());
    }
    public function home(){
        return view('theme.home',get_defined_vars());
    }
    public function service(){
        return view('theme.service',get_defined_vars());
    }
}
