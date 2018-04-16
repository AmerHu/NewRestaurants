@extends('layouts.app')
@section('content')
    <form method="post" action="/subitem/create" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">

            @foreach($extras as $extra)
                <div class="checkbox checkbox-success">
                    <label>{{$extra->name}}</label>
                    <input name="extra_id" id="extra_id" type="checkbox" value="{{$extra->id}}">
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-default">Publish</button>
    </form>
@endsection


