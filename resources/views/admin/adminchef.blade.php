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

    <div >
    <form action="{{url('/uploadchef')}}" method="POST" enctype="multipart/form-data" class="flex-column p-5">

      @csrf
      <div class = "p-2">
        <label>Name</label>
        <input style="color:blue;" type="text" name="name" placeholder="Enter name" required>
      </div>
      <div class = "p-2">
        <label>Speciality</label>
        <input style="color:blue;" type="text" name="speciality" placeholder="Enter speciality" required>
      </div>
      <div class = "p-2">
        <input type="file" name="image" required>
      </div>
      <div class = "p-2">
        <input class="btn btn-primary" type="submit" value="Save">
      </div>
    </form>


    <div >
    <table class="table table-primary">
      <tr>
        <th>Chef Name</th>
        <th>Speciality</th>
        <th>Image</th>
        <th>Action1</th>
        <th>Action2</th>
      </tr>
      @foreach($data as $data)
      <tr> 
        <td>{{$data->name}}</td>
        <td>{{$data->speciality}}</td>
        <td><img src="/chefimage/{{$data->image}}"></td>
        <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
        <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
        </tr>
        @endforeach
      

    </table>
    </div>

    </div>

    

</div>
    @include("admin.adminscript")

  </body>
</html>