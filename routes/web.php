<?php

use Illuminate\Support\Facades\Route;

// to use PostController
use App\Http\Controllers\PostController;

// to use UserController
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//  Route::get('/posts',[PostController::class, "index"] );

//  Route::get('/posts/create',[PostController::class, "create"] );
//  Route::post('/posts',[PostController::class, "store"] );

//  Route::get('/posts/{id}',[PostController::class, "show"] );

//  Route::get('/posts/{id}/edit',[PostController::class, "edit"] );
//  Route::patch('/posts/{id}',[PostController::class, "update"] );

//  Route::delete('/posts/{id}',[PostController::class, "destroy"] );
Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts',PostController::class);
 Route::get('/users/create',[UserController::class, "create"] );
 Route::post('/users',[UserController::class, "store"] );

