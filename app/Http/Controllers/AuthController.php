<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(){
        $this->middleware(['guest']);
    }
    public function loginPage(){
        return view('Auth.login');
    }
    public function login(Request $request){
        $this->validate($request,[
            'username'=>['required'],
            'password'=>['required']
        ]);

        if(!Auth()->attempt($request->only('username','password'))){
            return back() -> with('status','Invalid Login details');
        }

    return redirect() -> route('home');
       
}


public function registerPage(){
    return view('Auth.register');
}
public function register(Request $request){
    $this->validate($request,[
        'name'=>['required'],
        'email'=>['required', 'email','max:255'],
        'username'=>['required'],
        'password'=>['required','confirmed']
        
    ]);
    User::create([
        'name'=>$request->name,
        'username'=>$request->username,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),

    ]);

    auth()-> attempt($request->only('username','password'));


    return redirect()->route('home');

}


}