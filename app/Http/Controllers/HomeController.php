<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tweets = Tweet::latest()->paginate(5);

        return view('home',compact('tweets'));
    }

    /**
     * Show the application post page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function post()
    {
        return view('post');
    }

    public function postTweet(Request $request){
        auth()->user()->tweet()->create($request->all());
        return view('post');
    }
}
