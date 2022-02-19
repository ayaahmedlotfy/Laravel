<?php

namespace App\Http\Controllers;
// to make controller take data from model as view need it from db
use App\Models\Post;

// to use customized error
use App\Http\Requests\StorePostRequest;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // instead of select * from posts
    $posts=Post::all();
    return view('posts.index',["posts"=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    //  use StorePostRequest from its path in the topp of page to use customized error which i make
    public function store(StorePostRequest $request)
    {
        $post=new Post;
        $post->name=$request->name;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->user_id=5;
        $post->save();



//         Post::create(["name"=>$request->name,
//         "body"=>$request->body,
//         "title"=>$request->title,
//         "user_id"=>2


// ]);
return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
    return view('posts.show',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view('posts.edit',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, $id)
    {
        $post=Post::find($id);
        $post->name=$request->name;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();

         return redirect('/posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('/posts');



    }

}
