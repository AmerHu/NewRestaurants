@extends('layouts.app')
@section('header')
    <h2>Offers</h2>
@endsection



@section('content')
    <form method="post" action="/offers/create" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
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
            <label>Price</label>
            <input type="text" class="form-control" name="price" id="price"/>
            @if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div>



        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" id="description"/>
            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>Is Offers</label>
            <br>
            <label> Required  </label>
            <input name="require" id="require" type="radio" value="1"><br/>
            <label>Not Required   </label>
            <input checked="checked"id="require" name="require" type="radio" value="0">
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
