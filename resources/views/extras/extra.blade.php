<div class="col-md-6">
    <h4>Name : {{ $extra->name }}</h4>
    <h4>Price : {{ $extra->price}}</h4>
</div>
<div class="col-md-3">

    <a class="btn btn-primary btn-block" type="button" href="/extra/edit/{{$extra->id}}">edit</a>

</div>
<div class="col-md-3">
    <a class="btn btn-danger btn-block" type="button" href="/extra/delete/{{$extra->id}}"
       onclick="return confirm('Are you sure you want to delete this Extra ?')">
        Delete
    </a>
</div>
<hr/>