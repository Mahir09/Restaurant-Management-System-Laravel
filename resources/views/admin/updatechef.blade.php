<x-app-layout></x-app-layout>
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
        <form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Name</label>
                <input style = "color : black" type="text" name="name" value="{{$data->name}}" ><br>
                
                <label for="price">Speciality</label>
                <input style = "color : black" type="num" name="speciality" value="{{$data->speciality}}" ><br>
                
                <label for="image">Old Image</label>
                <img height = "200" width="200" src="/chefimage/{{$data->image}}"><br>
                
                <label for="image">New Image</label>
                <input style = "color : black" type="file" name="image"><br>
                
                <input style = "color : black" type="submit" value="Save" >
            </div>
            
        </form> 
        @include("admin.adminjs")
    </div>
    </div>
    
  </body>
</html>