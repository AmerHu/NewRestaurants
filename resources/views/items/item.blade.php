<div class="col-md-5">
    <h3>Name : <a href="/items/show/{{ $item->id}}">{{ $item->name }}</a></h3>
</div>

<div class="col-md-3">
    <img src="/images/items/{{$item->img}}" style="height: 100%">
</div>
<div class="col-md-4">
    <a class="btn btn-danger btn-block" type="button" href="/items/delete/{{$item->id}}"
       onclick="return confirm('Are you sure you want to delete this Item and any related items or extra?')">
        Delete
    </a>
</div>

