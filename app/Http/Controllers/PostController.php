<?php

namespace App\Http\Controllers;
use \App\Models\post;
// use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(post $post){
        // $post=post::get()->all();
        // dd($post);
        // return $post;

        return view('post',compact('post'));

    }
}
