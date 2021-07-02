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
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Title</label>
                <input style = "color : black" type="text" id="title" name="title" value="{{$data->title}}" ><br>
                
                <label for="price">Price</label>
                <input style = "color : black" type="num" id="price" name="price" value="{{$data->price}}" ><br>
                
                <label for="description">Description</label>
                <input style = "color : black" type="text" id="description" name="description" value="{{$data->description}}" ><br>
                
                <label for="image">Old Image</label>
                <img height = "200" width="200" src="/foodimage/{{$data->image}}"><br>
                
                <label for="image">New Image</label>
                <input style = "color : black" type="file" id="image" name="image"><br>
                
                <input style = "color : black" type="submit" value="Save" >
            </div>
            
        </form> 
        @include("admin.adminjs")
    </div>
    </div>
    
  </body>
</html>