<div class="col-md-4">
    <h3>Name : {{ $description->name }}</h3>
</div>
<div class="col-md-4">
    <a class="btn btn-primary btn-block" type="button" href="/desc/edit/{{$description->id}}">edit</a>
</div>
<div class="col-md-4">
    <a class="btn btn-danger btn-block" type="button" href="/desc/delete/{{$description->id}}"
                          onclick="return confirm('Are you sure you want to delete this Description?')">
        Delete
    </a>
</div>
<br/>
<br/>

