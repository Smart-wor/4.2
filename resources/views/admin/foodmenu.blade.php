<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
  @include("admin.admincss")

</head>
<body>
<div class="container-scroller">
    @include("admin.navbar")


    <div>


      <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data" class="flex-column p-5">
        @csrf
        <div class="p-2">
          <label >Title</label>
          <input style="color:black;" type="text" name="title" placeholder="Enter title" required>
        </div>
        <div class="p-2">
          <label>Price</label>
          <input style="color:black;" type="num" name="price" placeholder="Enter price" required>
        </div>

         <div class="p-2">
          <label>Stock</label>
          <input style="color:black;" type="num" name="stock" placeholder="Update stock" required>
        </div>


        <div class="p-2">
          <label>Image</label>
          <input type="file" name="image" required>
        </div>
        <div class="p-2">
          <label>Description</label>
          <input style="color:black;" type="text" name="description" placeholder="Enter description" required>
        </div>
        <div class="p-2">
         <input class = "btn btn-primary" type="submit" value="Save">
        </div>
      </form>

      <div>
        <table class="table table-primary mb-5">
          <tr>
            <th>Food Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action1</th>
            <th>Action2</th>
          </tr>

          @foreach($data as $data)
          <tr>
            <td>{{$data->title}}</td>
            <td>{{$data->price}}</td>
             <td>
              {{$data->stock }}
            </td>
            <td>{{$data->description}}</td>
            <td><img src="/foodimage/{{$data->image}}"></td>
            <td><a href="{{url('/deletemenu', $data->id)}}">Delete</a></td>
            <td><a href="{{url('/updatemenu', $data->id)}}">Update</a></td>
          </tr>
          @endforeach
        </table>
      </div>


    </div>
</div>

    @include("admin.adminscript")


</body>
</html>