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
    <h2>Categories</h2>
@endsection

@section('content')

    <form method="post" action="/category/edit/{{$category->id}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="hidden" value="{{ csrf_token() }}">

            <div class="form-group">
                <input type="hidden" name="id" value="{{ $category->id }}">
            </div>

            <div class="form-group">
                <label>Arabic Name    :</label>
                <input type="text" name="name_ar" value="{{ $category->name_ar }}">
            </div>
            <div class="form-group">
                <label>English Name    :</label>
                <input type="text" name="name_en" value="{{ $category->name_en }}">
            </div>

            <div class="form-group">
                <label>{{ $category->img }}</label>

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
            <button type="submit" class="btn btn-default">Update</button>
        </div>
    </form>
@endsection
