<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {

    $posts=[
        [
"id"=>1,
"name"=>"aya",
"body"=>"body post of aya",
"title"=> "title post of aya"
    ],
    [
        "id"=>2,
        "name"=>"ali",
        "body"=>"body post of ali",
        "title"=> "title post of ali"
    ],
    [
        "id"=>3,
        "name"=>"hana",
        "body"=>"body post of hana",
        "title"=> "title post of hana"
    ]
];
    return view('posts.index',["posts"=>$posts]);

});

Route::get('/show/{id}', function ($id) {

    $post=[
"id"=>$id,
"name"=>"aya",
"body"=>"body post of aya",
"title"=> "title post of aya"];
    return view('posts.show', $post);
})->where('id','[0-9]+');

// edit in form when click on edit go to /update
Route::get('/edit/{id}', function ($id) {

    $post=[
"id"=>$id,
"name"=>"aya",
"body"=>"body post of aya",
"title"=> "title post of aya"];
    return view('posts.edit', $post);
})->where('id','[0-9]+');

// when edit go to update path
Route::post('/update', function () {
    return "UPDATED";
});

Route::get('/create', function () {
    return view('posts.create');
});

Route::post('/store', function () {
    return "STORED";
});

Route::get('/delete/{id}', function ($id)  {
    return "DELETED";
})->where('id','[0-9]+');

