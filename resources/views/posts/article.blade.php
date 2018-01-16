
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

    <table class="table">
        <thead class="thead-dark">
        <tr>

            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->title}}</th>
                <td>{{$post->body}}</td>
                <td>

                    <a href="{{ route('edit', [$post->id]) }}">Edit</a>





                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

        </div>
    </div>



@endsection

