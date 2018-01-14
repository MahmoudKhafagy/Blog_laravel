<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;


class CommentsController extends Controller
{

    /**
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Post $post){

        $this->validate(request(),['body' => 'required|min:2']);

        $post->addComment(request('body'),\Auth::user()->id);

        return back();
    }

}
