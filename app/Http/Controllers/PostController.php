<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
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

        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }


    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;

        return view('posts.create', compact('post'));
    }



    public function store()
    {

        $this->validate(request(),[
            'title' => 'required',
            'body'  => 'required'
        ]);


        Post::create([
            'title'    => request('title'),
            'body'     => request('body'),
            'user_id'  => auth()->id(),
        ]);

        return redirect('/');
    }
    public function edit($id)
    {
        //
    }

    public function destroy($id)
    {
        // b
    }
}
