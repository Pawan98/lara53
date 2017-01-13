<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
 public function ratin()

    {


$post = Post::first();

$rating = new willvincent\Rateable\Rating;
$rating->rating = 5;
$rating->user_id = \Auth::id();

$post->ratings()->save($rating);

dd(Post::first()->ratings);
       
        
    }
    
    }

