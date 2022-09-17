<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        return view('welcome')->with('posts',$posts);
    }

    public function getPost($id)
    {
        echo "id is ". $id;      
    }
}
