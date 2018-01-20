@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <table class="table">
                <thead class="thead-dark">
                <tr>

                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Tache</th>
                    <th scope="col">Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>
                            <a href="{{ route('edit', [$post->id]) }}" class="btn btn-primary btn-sm">
                                <span class="glyphicon glyphicon-trash"></span> Edit
                            </a>

                            <span>|</span>
                            <a href="{{ $post->id }}" class="btn btn-success btn-sm">
                                <span class="glyphicon glyphicon-eye-open"></span> Show
                            </a>


                            <span>|</span>

                            <a href="" class="btn btn-danger btn-sm"
                               onclick="event.preventDefault();document.getElementById('form-{!! $post->id !!}').submit();">
                                <span class="glyphicon glyphicon-trash"></span> Delete
                            </a>
                            <form id="form-{{$post->id}}" method="POST"
                                  action="{{route('posts.destroy', [$post->id])}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                            </form>


                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>



@endsection

