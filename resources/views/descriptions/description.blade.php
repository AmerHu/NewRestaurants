<div class="col-md-4">
    <h3>Name : {{ $description->name }}</h3>
</div>
<div class="col-md-4">
    <a class="btn btn-primary btn-block" type="button" href="/desc/edit/{{$description->id}}">edit</a>
</div>
<div class="col-md-4 text-center">
    @if($description->active == 1)
        <a  href="/desc/delete/{{$description->id}}/0"
            onclick="return confirm('Are you sure you want to deactivate this Description ?')">
            <img src="/images/check.svg" style="width:20% ;margin-top: -14px;"></a>

    @endif
    @if($description->active == 0)
        <a href="/desc/delete/{{$description->id}}/1"
           onclick="return confirm('Are you sure you want to active this Description ?')">
            <img src="/images/red-x-icon-transparent-background-6.png" style="width:18% ;margin-top: -20px;">
            </a>

    @endif
</div>
<br/>
<br/>
<br/>
<br/>
