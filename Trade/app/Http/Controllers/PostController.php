<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function create()
    {
        return view('post');
    }

    public function store(Request $request)
    {
        $post =  new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');

        $post->save();

        //flash(' Article posted successfully!')->info();
        return redirect()->back();
    }

    public function articles()
    {
        $posts = Post::all();
        return view('Admin/Articles',[
            'posts'=>$posts
            ]);
    }

    
}
