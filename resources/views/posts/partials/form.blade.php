

<form action="{{ $item->exists ? route('posts.update', [$item->id]) : route('posts.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    {{ method_field( $item->exists ? 'PUT' : 'POST' ) }}

    <div class="form-group">

        <input value="{{old('title', $item->title)}}" type="text" placeholder="titre" class="form-control" type="text" name="title">

    </div>

    <div class="form-group">

        <textarea class="form-control" placeholder="description" name="body" id="" cols="30" rows="10">{{old('body', $item->body)}}</textarea>

    </div>

    <div class="form-group">

        <select name="iscompleted" id="" class="form-control">

            <option value="0">Non</option>
            <option value="1">Oui</option>

        </select>

    </div>

    <div class="form-group">
        <label for="url">Image</label>
        <input type="file" name="url" id="url">
    </div>

    <button class="btn btn-primary btn-block">Envoyer</button>

</form>

