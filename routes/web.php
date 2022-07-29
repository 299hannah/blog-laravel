<?php

use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;


Route::get('/','App\Http\Controllers\HomeController@index');
// Route::get('/',[PostController::class,'index']);
Route::get('/','App\Http\Controllers\PostController@index');

// Route::group(['namespace'=> 'App\Http\Controllers\Admin\
// '],function(){

//     Route::resource('admin/post','PostController');
//     // Route::resource('admin/post','TagController');
//     // Route::resource('admin/post','CategoryController');
    
// });

// use App\Http\Controllers\Admin\CategoryController;
 
// Route::resource('admin/post', CategoryController::class);
// Route::resource('admin/post','App\Http\Controllers\PostController');
// Route::resource('admin/post','App\Http\Controllers\TagController');
Route::resource('admin/post','App\Http\Controllers\Admin\CategoryController');

// Route::get('admin/home',function(){
//     return view('admin.home');
// })->name('post');

// Route::get('admin/post',function(){
//     return view('admin/post/post');
// });

// Route::get('admin/tag',function(){
//     return view('admin.tag.tag');
// });

// Route::get('admin/category',function(){
//     return view('admin.category.category');
// });
