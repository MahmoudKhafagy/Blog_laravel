@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @include('posts.partials.errors')

            <div class="col-xs-12 panel panel-default">
                <h2>Editer une tache</h2>

                @include('posts.partials.form', ['item' => $posts])
            </div>
        </div>
    </div>
@endsection