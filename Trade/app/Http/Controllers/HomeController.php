<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function indexarticles()
    {
        $posts = Post::all();
        return view('Articles',[
            'posts'=>$posts
            ]);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin/dashboard');
    }
        public function article_write()
    {
        return view('Admin/Article_write');
    }

}
