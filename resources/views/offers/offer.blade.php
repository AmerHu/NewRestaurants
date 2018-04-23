<div class="col-md-4">
    <h3>Name : <a href="/offers/show/{{ $offer->id}}">{{ $offer->name }}</a></h3>
</div>
<div class="col-md-4">
    <img src="/images/offers/{{$offer->img}}" style="height: 200px">
</div>
<div class="col-md-4">
    <a class="btn btn-danger btn-block btn-lg" type="button" href="/offers/delete/{{$offer->id}}"
       onclick="return confirm('Are you sure you want to delete this OFFERS?')">
        Delete
    </a>
</div>


