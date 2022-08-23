<?php

use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;



Route::get('/','App\Http\Controllers\HomeController@blog');
Route::get('post/{post}','App\Http\Controllers\PostController@post')->name('post');

// Route::get('admin/home','Admin\HomeController@index')->name('admin/home');
// Route::get('/adminportal',[AdminController::class,'adminportal'])->name('adminportal');

Route::group(['namespace'=> 'App\Http\Controllers\Admin'],function(){
    Route::get('admin/home','HomeController@index')->name('admin/home');

    Route::resource('admin/post','PostController');
    Route::resource('admin/tag','TagController');
    Route::resource('admin/category','CategoryController');
    Route::resource('admin/user','UserController');

    
});


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
