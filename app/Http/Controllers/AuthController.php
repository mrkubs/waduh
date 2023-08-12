<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;
use Illuminate\Contracts\Support\ValidatedData;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            "title"=> "Login",
            'isAuthPage' => true,
            
            
            ]);
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $cred = $request->validate([
            'email' => ['required','email:dns'],
            'password' => ['required']
        ]);

        if (Auth::attempt($cred)) {
            $request->session()->regenerate();
            return redirect()->intended('');
            
        }
            return back()->with('logError', 'Login Failed');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }

    public function create (){
        return view('auth.login', [
        "title"=> "Login- Add"
        ]);
    }
    
    public function store (Request $request){
        $validatedData = $request -> validate([
            "name" => 'required |min:5|max:50',
            "email" => 'unique:users,email|required',
            "password" => Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
        ]);
        User::create($validatedData);
        return redirect('/login')->with('success', 'Register Successful');
    }
}
