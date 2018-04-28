@extends('layouts.app')
@section('header')
    <h2> <a href="/compo/admin">Compo Offers</a></h2>
@endsection

@section('content')
    <form method="post" action="/compo/create" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div  class="form-group">
            <label>Name AR</label>
            <input type="text" name="nameAR" class="form-control" id="nameAR">
            @if ($errors->has('nameAR'))
                <span class="help-block">
                   <strong>{{ $errors->first('nameAR') }}</strong>
               </span>
            @endif
        </div>
        <div  class="form-group">
            <label>Name EN</label>
            <input type="text" name="nameEN" class="form-control" id="nameEN">
            @if ($errors->has('nameEN'))
                <span class="help-block">
                   <strong>{{ $errors->first('nameEN') }}</strong>
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
            <label>Image</label>
            <input id="file-upload" type="file" name="img" id="img"/>
            @if ($errors->has('img'))
                <span class="help-block">
                    <strong>{{ $errors->first('img') }}</strong>
                </span>
            @endif
        </div>

        <button type="submit" class="btn btn-default">Publish</button>
    </form>
@endsection


