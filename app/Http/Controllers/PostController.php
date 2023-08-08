<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts (){
        return view('contents.posts', [
        "title"=> "Posts",
        "posts"=> Post::all()
        ]);
    }
}
