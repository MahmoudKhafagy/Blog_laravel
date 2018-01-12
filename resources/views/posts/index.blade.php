@extends('layouts.app')



@section('content')

    <main role="main" class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">

                @foreach($posts as $post)
                    <div class="blog-post">
                        <a href="{{ $post->id }}"><h1 class="blog-post-title">{{ $post->title }}</h1></a>
                        <p class="blog-post-meta">{{ $post->created_at }} by <a href="#"></a></p>
                        <p>{{ $post->body }}</p>
                    <hr>

                    </div><!-- /.blog-post -->
                @endforeach


            </div><!-- /.blog-main -->

            <aside class="col-sm-3 ml-sm-auto blog-sidebar">


                <div class="sidebar-module">
                    <h4>Anciens articles</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>



            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->

@endsection

