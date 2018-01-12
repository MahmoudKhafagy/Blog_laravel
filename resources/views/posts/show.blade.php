@extends('layouts.app')

@section('content')

    <main role="main" class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">

                    <div class="blog-post">
                        <h1 class="blog-post-title">{{ $post->title }}</h1>
                        <p class="blog-post-meta">{{ $post->created_at }} by <a href="#"></a></p>
                        <p>{{ $post->body }}</p>
                        <hr>

                    </div><!-- /.blog-post -->

                <h1>Commentaires</h1>
                <form>
                    <div class="form-group">
                        <textarea name="text" id="" cols="85" rows="3"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>

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