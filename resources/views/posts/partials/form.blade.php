

<form action="{{ '/' }}" method="POST">
    {{ csrf_field() }}


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

    <button class="btn btn-primary btn-block">Envoyer</button>

</form>

