@extends('layouts.app')

@section('content')



<div class="container">

    <div class="row">

      @include('posts.partials.errors')

        <div class="col-xs-12 panel">

            <h2>Créer un Article</h2>


            @include('posts.partials.form', ['item' => $post])



        </div>

    </div>

</div>



@endsection