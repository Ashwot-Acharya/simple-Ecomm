<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainPageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function explore(){
        return view('explore');
    }
    public function mypage(){
        return view('mypage');
    }
    public function cart(){
        return view('cart');
    }
    public function shop(){
        return view('Auth.shop');
    }
}
