@extends('layouts.app')
@section('content')

    <form method="post" action="/desc/edit/{{$description->id}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="hidden" name="id"  id="id" value = {{$description->id}}>
            <input type="text" name="name" class="form-control" id="name" value = {{$description->name}}>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <button type="submit" class="btn btn-default">Publish</button>
    </form>
@endsection
