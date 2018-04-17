@extends('layouts.app')
@section('content')
    <form method="post" action="/desitem/create" enctype="multipart/form-data">
        <div class="form-group">
            <div class="form-group">
                <input type="hidden" name="item_id" value="{{ $item->id }}">
            </div>
            @foreach($descriptions as $description)
                <div class="checkbox checkbox-success">
                    <input name="extra_id[]" id="extra_id{{ $description->id }}" type="checkbox"
                           value="{{ $description->id }}">
                    <label for="extra_id{{ $description->id }}">{{$description->name}}</label>
                </div>
            @endforeach
        </div>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-default">Publish</button>
    </form>
@endsection
