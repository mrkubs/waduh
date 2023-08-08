<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

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
            "name" => 'required',
            "email" => 'unique:users,email|required',
        ]);
        $user->update($validatedData);
        return redirect('/account/'.$id.'/edit')->with('success', 'Data Change Succesful.');
    }
}
