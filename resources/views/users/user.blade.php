<div class="row">
    <div class="col-md-8">
        <h3>Name : <a href="/user/show/ {{ $user->id}}">{{ $user->name }}</a></h3>
        <h3>Email : {{ $user->email}}</h3>
        <h3>Type : {{ $user->type }}</h3>

    </div>
    <div class="col-md-4">
        <a class="btn btn-danger btn-block btn-lg" type="button" href="/user/delete/{{$user->id}}"
           onclick="return confirm('Are you sure you want to delete this user?')">
            Delete
        </a>
    </div>
</div>