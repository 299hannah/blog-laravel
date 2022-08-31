<?php

use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Route::get('/','App\Http\Controllers\User\HomeController@index');
Route::get('post/{post}','App\Http\Controllers\PostController@post')->name('post');
Route::get('post/tag/{tag}','App\Http\Controllers\HomeController@tag')->name('tag');
Route::get('post/category/{category}','App\Http\Controllers\HomeController@category')->name('category');

// Route::get('admin/home','Admin\HomeController@index')->name('admin/home');
// Route::get('/adminportal',[AdminController::class,'adminportal'])->name('adminportal');

Route::group(['namespace'=> 'App\Http\Controllers\Admin'],function(){
    Route::get('admin/home','HomeController@index')->name('admin/home');

    Route::resource('admin/post','PostController');
    Route::resource('admin/tag','TagController');
    Route::resource('admin/category','CategoryController');
    Route::resource('admin/user','UserController');
    Route::resource('admin/role','RoleController');
    Route::resource('admin/permission','PermissionController');
    Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login','Auth\LoginController@login');
    
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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
