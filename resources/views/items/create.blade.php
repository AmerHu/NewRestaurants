@extends('layouts.app')
@section('content')
    <form method="post" action="/items/create" enctype="multipart/form-data">
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
            <label>Category</label>
            <select name="cate_id" class="form-control" style="height:36px">
                <option>Select Vehicle</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name_en }}
                    </option>
                @endforeach
                @if ($errors->has('cate_id'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('cate_id') }}</strong>
                                    </span>
                @endif
            </select>
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


