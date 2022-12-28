<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function login(){
        if (Auth::check() && Auth::user()->role->id == 1){
            $this->redirectTo = route('admin.dashboard') ;
        }else{

            $this->redirectTo = route('home');
        }



        $this->middleware('guest')->except('logout');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $bposts = DB::table('blogposts')->limit(3)->get();
        $posts = DB::table('posts')
            ->join('categories', 'posts.category_id', 'categories.id')
            ->select('posts.*', 'categories.category_name')
            ->limit(8)
            ->get();

        return view('author.main.index', compact('posts', 'bposts'));
    }
}
