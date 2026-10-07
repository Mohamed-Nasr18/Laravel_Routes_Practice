<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Basic Route Example
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Route Parameters
Route::get('/users/{id}', function ($id){
    return "User ID: " . $id;
});

// Optional Parameter:
Route::get('/users/{id?}', function ($id = null){
    return $id ? "User ID: " . $id : "All Users";
});

//Route Grouping
Route::group(['prefix'=>'admin'], function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });
    Route::get('/users', fn () => 'Admin Users');
});

//Linking Routes to Controllers
Route::get('/posts/{id}', [PostController::class, 'show']);

