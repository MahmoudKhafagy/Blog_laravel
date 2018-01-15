@extends('layouts.app')

@section('content')

    <main role="main" class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">

                    <div class="blog-post" data-postid="{{ $post->id }}">
                        <h1 class="blog-post-title">{{ $post->title }}</h1>
                        <p class="blog-post-meta">{{ $post->created_at->format('d M Y') }} par {{ $post->user->name }} <a href="#"></a></p>
                        <p>{{ $post->body }}</p>
                        <hr>



                        <br>
                        @if(auth()->id())
                        <div>
                            <a href="#" class="btn btn-xs btn-info like">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? 'Vous aimez cet article' : 'Like' : 'Like'  }}</a> |
                            <a href="#" class="btn btn-xs btn-danger like">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 0 ? 'Vous n\'aimez pas cet article' : 'Dislike' : 'Dislike'  }}</a>
                        </div>
                        @else

                        @endif

                        <br><br>
                        <div>
                            <h2>Commentaires: </h2>
                        <ul class="list-group">
                        @foreach($post->comments as $comment)
                            <li class="list-group-item">

                            <strong>
                                <p class="blog-post-meta">{{ $comment->created_at->diffForHumans()}} par {{ $comment->user->name }}: &nbsp;</p>
                            </strong>
                            {{ $comment->body }}

                            </li><br>

                        @endforeach
                        </ul>
                        </div>


                    </div><!-- /.blog-post -->




        @if(auth()->id())
                <form method="POST" action="{{ $post->id }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" placeholder=" Écrire un commentaire" cols="95" rows="3"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Publier</button>

                </form>
                <br>
                @include('posts.partials.errors')




            </div><!-- /.blog-main -->

    @else

        <p>Vous devez être connecté pour pouvoir poster un commentaire.</p>

    @endif



        </div><!-- /.row -->

    </main><!-- /.container -->



@endsection