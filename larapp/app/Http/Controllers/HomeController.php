<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Game;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'welcome','search']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'Admin') {
            return view('dashboard-admin');
        } 
        else if(Auth::user()->role == 'Editor') {
            return view('dashboard-editor');
        } else {
            $user = User::find(Auth::user()->id);
            return view('dashboard-customer')->with('user', $user);
        } 
    }
    

    public function welcome() {
        $sliders      = Game::where('slider', 1)->get();
        $categories   = Category::all();
        $games        = Game::all();

        return view('welcome')->with('sliders', $sliders)
        ->with('categories', $categories)
        ->with('games', $games);
    }

    public function search(Request $request){
    $categories   = Category::names($request->q)->orderBy('id','ASC')->paginate(2); 
    $categories   = Category::all();
    $games        = Game::all();

     return view('search')->with('categories', $categories)
                          ->with('games', $games);

    }
} 