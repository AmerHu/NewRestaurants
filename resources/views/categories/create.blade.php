@extends('layouts.app')

@section('header')
    <h2>Categories</h2>
@endsection

@section('content')
    <form method="post" action="/category/create" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div  class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="help-block">
                   <strong>{{ $errors->first('name') }}</strong>
               </span>
            @endif
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="img" id="img"/>
            @if ($errors->has('img'))
                <span class="help-block">
                   <strong>{{ $errors->first('img') }}</strong>
               </span>
            @endif
        </div>
        <button type="submit" class="btn btn-default">Publish</button>
    </form>
@endsection
