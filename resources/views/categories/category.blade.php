<div class="col-md-4">
    <h4>
        <lable>English Name :</lable>
        <a href="/category/show/{{$category->id}}">{{ json_decode($category->name, true)['EN'] }} </a>
    </h4>
</div>
<div class="col-md-4">
    <img src="/images/categories/{{ $category->img }}" style="height: 300px;">
</div>
<div class="col-md-4 text-center">
    @if($category->active == 1)
        <a href="/category/delete/{{$category->id}}/0"
           onclick="return confirm('Are you sure you want to deactivate this Category ?')">
            <img src="/images/check.svg" style="width: 35%;
    margin-top: 11%;">
        </a>
    @endif
    @if($category->active == 0)
        <a href="/category/delete/{{$category->id}}/1"
           onclick="return confirm('Are you sure you want to active this Category ?')">
            <img src="/images/red-x-icon-transparent-background-6.png" style="width: 35%;
                margin-top: 11%;">
        </a>
    @endif
    <br/>
    <br/>
    <br/>
    <br/>
</div>