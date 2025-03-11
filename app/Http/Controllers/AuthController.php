<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm(){
        return view("login");
    }    
    
    public function login(Request $request){

        $Validated = $request->validate([
            "email"=> 'required',
            "password"=> 'required',
        ]);
        
        if(!Auth::attempt($Validated)){
            return redirect('login');
        }
        return redirect('article/index');
    }
}
