<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('blog');
});

Route::get('post',function(){
    return view('post');
})->name('post');


Route::get('admin/home',function(){
    return view('admin/home');
})->name('post');
