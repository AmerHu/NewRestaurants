<h3>Name : <a href="/user/show/ {{ $user->id}}">{{ $user->name }}</a></h3>
<h3>Email : {{ $user->email}}</h3>
<h3>Type : {{ $user->type }}</h3>

<a class="btn btn-primary" type="button" href="/user/edit/{{$user->id}}">edit</a>
<a class="btn btn-danger" type="button" href="/user/delete/{{$user->id}}">Delete</a>
