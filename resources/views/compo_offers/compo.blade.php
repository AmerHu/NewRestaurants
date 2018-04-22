<div class="col-md-4">
    <h3>Name : <a href="/compo/show/{{ $compo->id}}">{{ $compo->name }}</a></h3>
</div>
<div class="col-md-4">
    <img src="/images/compo/{{$compo->img}}" style="width:800%">
</div>
<div class="col-md-4">

    <a class="btn btn-danger btn-block" type="button" href="/compo/delete/{{$compo->id}}"
       onclick="return confirm('Are you sure you want to delete this OFFERS?')">
        Delete
    </a>
</div>