<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect("/posts");
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('posts',PostController::class)->middleware('auth');
