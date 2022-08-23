<?php

namespace App\Http\Controllers;
use \App\Models\post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function blog(){

        // $posts=post::all();
        // return view('blog',compact('posts'));
   // $posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(5);
    	// return view('user.blog',compact('posts'));
        $posts=post::where('status','1')->get();
        return view('blog',compact('posts'));
    }
}
