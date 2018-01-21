@extends('layouts.app')



@section('content')


    @if(!$posts->isEmpty())


        <main role="main" class="container">

            <div class="row">

                <div class="col-sm-8 blog-main">

                    @foreach($posts as $post)

                        <div class="blog-post">
                            <a href="{{ $post->id }}"><h1 class="blog-post-title">{{ $post->title }}</h1></a>
                            <p><img src="upload/{{ $post->url }}" alt="" style="width: 600px; height: 400px"></p>
                            <p class="blog-post-meta">{{ $post->created_at->format('d M Y') }} par {{ $post->user->name }}<a href="#"></a></p>
                            <p>{{ $post->body }}</p>
                            <hr>

                        <span class="glyphicon glyphicon-thumbs-up"></span> {{ $likecount->where('post_id', '=', $post->id)->where('like', '==', 1)->count() }} |
                        <span class="glyphicon glyphicon-thumbs-down"></span> {{ $likecount->where('post_id', '=', $post->id)->where('like', '==', 0)->count() }}
                        <p style="float: right">commentaire: {{ $commentcount->where('post_id', '=', $post->id)->count() }}</p>


                        </div><!-- /.blog-post -->
                    @endforeach


                </div><!-- /.blog-main -->

                <aside class="col-sm-3 ml-sm-auto blog-sidebar">

                    <div class="sidebar-module">
                        <h4>Anciens articles</h4>
                        @foreach($posts as $post)
                            <ol class="list-unstyled">
                                <li><a href="{{ $post->id }}">{{ $post->title }}</a></li>

                            </ol>

                        @endforeach

                    </div>


                </aside><!-- /.blog-sidebar -->

            </div><!-- /.row -->

        </main><!-- /.container -->

    @else


        <div class="container">

            <div class="row">
                <div class="col-sm-8 blog-main">

                    <h2>Articles :</h2>
                    <p>Il n'y a pas d'article pour l'instant mais vous pouvez en ajouter à tout moment après vous être inscrit.</p>

                </div>
            </div>

        </div>

    @endif


@endsection

