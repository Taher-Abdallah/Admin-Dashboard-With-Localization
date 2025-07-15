<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function about(){
        return view('theme.about');
    }
    public function contact(){
        return view('theme.contact');
    }
    public function home(){
        return view('theme.home');
    }
    public function service(){
        return view('theme.service');
    }
}
