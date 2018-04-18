@extends('layouts.app')

@section('header')
    <h2>Categories</h2>
@endsection

@section('content')
    <form method="post" action="/category/create" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div  class="form-group">
            <label>Name AR</label>
            <input type="text" name="name_ar" class="form-control" id="name_ar">
            @if ($errors->has('name_ar'))
                <span class="help-block">
                   <strong>{{ $errors->first('name_ar') }}</strong>
               </span>
            @endif
        </div>
        <div class="form-group">
            <label>Name En</label>
            <input type="text" class="form-control" name="name_en" id="name_en"/>
            @if ($errors->has('name_en'))
                <span class="help-block">
                   <strong>{{ $errors->first('name_en') }}</strong>
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
