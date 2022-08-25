<?php

namespace App\Http\Controllers;
use \App\Models\post;
use \App\Models\category;
use \App\Models\tag;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function blog(){

        // $posts=post::all();
        $posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(2);
        // $posts=post::where('status',1)->get();
        return view('blog',compact('posts'));
    }
    public function tag(tag $tag){
        $posts= $tag->posts();
        return view('blog',compact('posts'));

      
        // return $request->all();
    }
    public function category( category $category){
        
        $posts= $category->posts();
        return view('blog',compact('posts'));

        // return $request->all();
    }
}
