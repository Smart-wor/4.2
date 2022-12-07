
<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
  @include("admin.admincss")

  </head>
  <style>
  .table-container{
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    margin :0 auto;
  }
  


  </style>
  <body>
  <div class="container-scroller cont">
    @include("admin.navbar")
    <div class="m-5">
      
      <table class="table table-primary ">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
        </tr>

        @foreach($data as $data)
        @if($data->usertype=="0")
        <tr>
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
        </tr>
        @endif
      @endforeach

      </table>

    </div>
    </div>
    
    @include("admin.adminscript")
  </body>
</html>