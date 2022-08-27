<?php

namespace App\Http\Controllers\User;
use App\Models\category;
use App\Models\post;
use App\Models\tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(5);
    	return view('blog',compact('posts'));
    }
    public function tag(tag $tag)
    {
        $posts = $tag->posts();
        return view('blog',compact('posts'));
    }

    public function category(category $category)
    {
        $posts = $category->posts();
        return view('blog',compact('posts'));
    }
}
