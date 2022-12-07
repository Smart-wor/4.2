<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
		
	<base href="/public">
  @include("admin.admincss")

  </head>

  <body>
  <div class="container-scroller">
    @include("admin.navbar")
    <div>

<form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data" class="m-5">
  @csrf


  <div class="p-2">
    <label>Title</label>
    <input style="color:black;" type="text" name="title" value="{{$data->title}}" required>
  </div>

  <div class="p-2">
    <label>Price</label>
    <input style="color:black;" type="num" name="price" value="{{$data->price}}" required>
  </div>

   <div class="p-2">
    <label>Stock</label>
    <input style="color:black;" type="text" name="stock" value="{{$data->stock}}" required>
  </div> 

  <div class="p-2">
    <label>Description</label>
    <input style="color:black;" type="text" name="description" value="{{$data->description}}" required>
  </div>

  <div class="p-2">
    <label>old Image</label>
    <img height="200" width="200" src="/foodimage/{{$data->image}}">
  </div>
 <!-- <div class="p-2">
    <label>Image</label>
    <input type="file" name="image" required>
  </div>-->
  <div class="p-2">
   <input class="btn btn-primary" type="submit" value="Save">
  </div>
</form>
<div>

</div>
    @include("admin.adminscript")

  </body>
</html>