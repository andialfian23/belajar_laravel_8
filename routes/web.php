<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
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

// Route:: nama_method ( '/url' ,[ NamaController::class, 'nama_method' ])-> name(' nama_route ')-> middleware( 'jenis_user' );
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); //VIEW LOGIN
Route::post('/login', [LoginController::class, 'authenticate']);        //PROSES LOGIN
Route::post('/logout', [LoginController::class, 'logout']);     //PROSES LOGOUT

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest'); //VIEW REGISTER
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');    //PROSES REGISTER

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('is_admin');
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');
