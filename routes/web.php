<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


//route resource
Route::resource('/', \App\Http\Controllers\PostController::class);

Route::get('/posts/create', 'PostController@create')->name('posts.create');

Route::resource('posts', PostController::class);
