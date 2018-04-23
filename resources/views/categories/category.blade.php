<div class="col-md-4">
   <h4><lable>English Name : </lable>
    <a  href="/category/show/{{$category->id}}">{{ $category->name }} </a>
   </h4>
</div>
<div class="col-md-4">
    <img src="/images/categories/{{ $category->img }}" style="height:  80%">
</div>
<div class="col-md-4">
    <a class="btn btn-danger btn-block" type="button" href="/category/delete/{{$category->id}}"
       onclick="return confirm('Are you sure you want to delete this Category ?')">Delete</a>
</div>