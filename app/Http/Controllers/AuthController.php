<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view ('auth.login',['title = Login', 'isAuthPage'=> true]);
    }

    public function authenticate(Request $request){
        $data = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        dd($data);
    }
}
