<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Andi Alfian",
        "email" => "andialfi90@gmail.com",
        "image" => "Andi.png"
    ]);
});
//POSTS
Route::get('/posts', [PostController::class, 'index']);
//SINGLE POST
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

//CATEGORY
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category : " . $category->name,
        "active" => 'categories',
        'posts' => $category->posts->load('category', 'author'),
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post by Author : $author->name",
        // 'posts' => $author->posts,
        // LAZY EAGER LOADING -> menghindari N+1 Problem
        'posts' => $author->posts->load('category', 'author'),
    ]);
});
