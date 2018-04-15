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
@section('content')

    <form method="post" action="/offers/edit/{{$offer->id}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Name AR</label>
            <input type="text" name="name_ar" class="form-control" id="name_ar" value = {{$offer->name_en}}>
            @if ($errors->has('name_ar'))
                <span class="help-block">
                    <strong>{{ $errors->first('name_ar') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>Name En</label>
            <input type="text" class="form-control" name="name_en" id="name_en" value = {{$offer->name_ar}}>
            @if ($errors->has('name_en'))
                <span class="help-block">
                    <strong>{{ $errors->first('name_en') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price" id="price" value = {{$offer->price}}>
            @if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" id="description" value = {{$offer->description}}>
            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>

        @if($offer->require ===  1)
        <div class="form-group">
            <label>Is Offers</label>
            <br>
            <label> Required  </label>
            <input checked="checked" name="require" id="require" type="radio" value="1"><br/>
            <label>Not Required   </label>
            <input id="require" name="require" type="radio" value="0">
        </div>
        @endif

        @if($offer->require ===  0)
            <div class="form-group">
                <label>Is Offers</label>
                <br>
                <label> Required  </label>
                <input checked="checked" name="require" id="require" type="radio" value="1"><br/>
                <label>Not Required   </label>
                <input checked="checked" id="require" name="require" type="radio" value="0">
            </div>
        @endif

        <div class="form-group">
            <label>{{ $offer->img }}</label>

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
