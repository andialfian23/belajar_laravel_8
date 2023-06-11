<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
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
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
