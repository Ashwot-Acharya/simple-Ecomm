<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class authmanageController extends Controller
{
    public function change(Request $request){
        $this->validate($request,[
            'password'=>['required','confirmed']
        
        ]);
        UserDB::update('update users set votes = 100 where name = ?', [auth()->user()->name]);([
            

        ]);
    }
    public function logout(){
        Auth()->logout();
        return redirect('home');

    }

   


}
