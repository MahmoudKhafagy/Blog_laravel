@extends('layouts.app')

@section('content')



    <div class="container">

        <div class="row">

            @include('posts.partials.errors')

            <div class="col-xs-12 panel">
                <img src="/uploads/avatars/{{$user->avatar}}" alt=""
                     style="width: 150px; height: 150px; float: left; border-radius: 50%;margin-right: 25px;">
                <h2>{{ $user->name }} profile</h2>

                <form enctype="multipart/form-data" action="/profile" method="POST" >

                    <label>Ajouter une photo a votre profile</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary" >
                </form>
            </div>

        </div>

    </div>



@endsection