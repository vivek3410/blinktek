<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function features(){
        return view('features');
    }

    public function faq(){
        return view('faq');
    }

    public function blog(){
        return view('blog');
    }

    public function contact(){
        return view('contact');
    }
}