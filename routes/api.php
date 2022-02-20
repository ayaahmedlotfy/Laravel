<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;

use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// mobile app authentication

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return $user->createToken($request->device_name)->plainTextToken;
});

 Route::get('/posts',[PostController::class, "index"] )->middleware(['auth:sanctum']);
 Route::post('/posts',[PostController::class, "store"] )->middleware(['auth:sanctum']);
 Route::get('/posts/{id}',[PostController::class, "show"] )->middleware(['auth:sanctum']);
 Route::patch('/posts/{id}',[PostController::class, "update"] )->middleware(['auth:sanctum']);
 Route::delete('/posts/{id}',[PostController::class, "destroy"] )->middleware(['auth:sanctum']);



 Route::get('/users',[UserController::class, "index"] )->middleware(['auth:sanctum']);
 Route::post('/users',[UserController::class, "store"] )->middleware(['auth:sanctum']);
 Route::get('/users/{id}',[UserController::class, "show"] )->middleware(['auth:sanctum']);
 Route::patch('/users/{id}',[UserController::class, "update"] )->middleware(['auth:sanctum']);
 Route::delete('/users/{id}',[UserController::class, "destroy"] )->middleware(['auth:sanctum']);


