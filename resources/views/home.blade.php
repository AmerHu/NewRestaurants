@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Statics
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-flat-color-1">
                                    <div class="card-body pb-1">
                                        <h4 class="mb-0">
                                            <span class="count">{{$category}}</span>
                                        </h4>
                                        <p class="text-light">Category</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-flat-color-2">
                                    <div class="card-body pb-1">
                                        <h4 class="mb-0">
                                            <span class="count">{{$item}}</span>
                                        </h4>
                                        <p class="text-light">Item </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-flat-color-3">
                                    <div class="card-body pb-1">
                                        <h4 class="mb-0">
                                            <span class="count">{{$offer}}</span>
                                        </h4>
                                        <p class="text-light">Offers </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-flat-color-4">
                                    <div class="card-body pb-1">
                                        <h4 class="mb-0">
                                            <span class="count">{{$user}}</span>
                                        </h4>
                                        <p class="text-light">Members</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br/>
                        <div class="row">


                            <div class="col-sm-6 col-lg-6">
                                <div class="card text-white bg-flat-color-5">
                                    <div class="card-body pb-1">
                                        <h4 class="mb-0">
                                            <span class="count">{{$extras}}</span>
                                        </h4>
                                        <p class="text-light">Extra Item </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="card text-white bg-flat-color-1">
                                    <div class="card-body pb-1">
                                        <h4 class="mb-0">
                                            <span class="count">{{$desc}}</span>
                                        </h4>
                                        <p class="text-light">Description </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
