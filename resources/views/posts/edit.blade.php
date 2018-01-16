@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @include('task.partials.errors')

            <div class="col-xs-12 panel panel-default">
                <h2>Editer une tache</h2>

                @include('task.partials.form', ['item' => $task])
            </div>
        </div>
    </div>
@endsection