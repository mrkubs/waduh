<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Contracts\Support\ValidatedData;

class AdminController extends Controller
{
    public function dashboard (){
        return view('contents.dashboard', [
        "title"=> "Dashboard"
        ]);
    }

    public function account (){
        return view('contents.account', [
        "title"=> "Account",
        "users"=> User::all()
        ]);
    }

    public function edit ($id){
        return view('contents.account_edit', [
        "title"=> "Account - Edit",
        "user"=> User::find($id),
        ]);
    }
    
    public function update ($id, Request $request){
        $user = User::find($id);
        $validatedData = $request -> validate([
            "name" => 'required |min:5|max:50',
            "email" => 'unique:users,email,'.$id.'|required',
            "password" => Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
        ]);
        $user->update($validatedData);
        return redirect('/account/'.$id.'/edit')->with('success', 'Change Data Succesful');
    }

    public function create (){
        return view('contents.account_add', [
        "title"=> "Account - Add"
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
        return redirect('/account')->with('success', 'Add Data Successful');
    }

    public function show ($id){
        return view('contents.account_show', [
        "title"=> "Account - Detail",
        "user"=> User::find($id),
        ]);
    }

    public function delete ($id){ 
        $user = User::find($id);
        $user->delete();
        return redirect('/account')->with('delete', 'Delete Data Successful');
    }
    
}
