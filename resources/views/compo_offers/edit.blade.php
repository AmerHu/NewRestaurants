@extends('layouts.app')

<style>
    input[type="file"] {
        display: none;
    }

    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }
</style>
@section('header')
    <h2> <a href="/compo/admin">Compo Offers</a></h2>
@endsection

@section('content')

    <form method="post" action="/compo/edit/{{$compo->id}}" enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="form-group">
            <label>Arabic  Name </label>
            <input type="text" class="form-control" name="nameAR" id="nameAR" value= "{{ json_decode($compo->name, true)['AR'] }}" >
            @if ($errors->has('nameAR'))
                <span class="help-block">
                    <strong>{{ $errors->first('nameAR') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>English Name </label>
            <input type="text" class="form-control" name="nameEN" id="nameEN" value= "{{ json_decode($compo->name, true)['EN'] }} ">
            @if ($errors->has('nameEN'))
                <span class="help-block">
                    <strong>{{ $errors->first('nameEN') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price" id="price" value= {{$compo->price}}>
            @if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>{{ $compo->img }}</label>

            <label for="file-upload" class="custom-file-upload">
                <i class="fa fa-cloud-upload"></i> <Strong> Change Image</Strong>
            </label>
            <input id="file-upload" name="img" type="file" style=" display: none;"/>
            @if ($errors->has('img'))
                <span class="help-block">
                   <strong>{{ $errors->first('img') }}</strong>
               </span>
            @endif
        </div>
        <button type="submit" class="btn btn-default">Publish</button>
    </form>
@endsection
