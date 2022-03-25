<?php

namespace App\Http\Controllers;
use App\Models\Shop;
use Illuminate\Http\Request;

class shop_controller extends Controller
{
    public function shopsetup(Request $request ){
        
        $this -> validate($request,[
            'shop_name' => ['required'],
            'phone_no'=> ['required','digits:10'],
            'esewa_id'=>['required'],
            'checkbox' => ['required']
        ]);
        Shop::create([
            'shop_name'=> $request -> shop_name,
            'username'=> auth()->user()->Username,
            'phone_no'=> $request -> phone_no,
            'esewa_id' => $request -> esewa_id,
            'email'=> auth()->user()->email,

        ]);
        return redirect('home');

    }
}
