<?php

namespace App\Http\Controllers;


use App\Comment;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * PostController constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::latest()->get();
        $likecount = Like::get();
        $commentcount = Comment::get();
        return view('posts.index', compact('posts', 'likecount','commentcount'));
    }


    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $like = Like::get();
        return view('posts.show', compact('post', 'like'));
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

    /**
     * @param Request $request
     * @return null
     */
    public function postLikePost(Request $request)
    {
        $post_id = $request['postId'];
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $post = Post::find($post_id);
        if (!$post) {
            return null;
        }
        $user = Auth::user();
        $like = $user->likes()->where('post_id', $post_id)->first();
        if ($like) {
            $already_like = $like->like;
            $update = true;
            if ($already_like == $is_like) {
                $like->delete();
                return null;
            }
        } else {
            $like = new Like();
        }
        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->post_id = $post->id;
        if ($update) {
            $like->update();
        } else {
            $like->save();
        }
        return null;
    }


    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * @param PostRequest $request
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostRequest $request, Post $post)
    {

        $post->update($request->except('_token', '_method'));
        return redirect()->route('posts.show', [$post->id]);
    }

    public function articles(){
        $posts = Post::latest()->get();

        return view('posts.article', compact('posts'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back();
    }
}
