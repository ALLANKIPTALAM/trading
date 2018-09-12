<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function indexarticles()
    {
        $posts = Post::all();
        return view('/Articles',[
            'posts'=>$posts
            ]);
    }
    public function showArticle($id)
    {
        $post = Post::find($id);
        return view('show', compact('post'));
    }

    
}
