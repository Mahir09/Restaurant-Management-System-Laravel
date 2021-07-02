<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")
    <div>
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Title</label>
                <input style = "color : black" type="text" id="title" name="title" placeholder="Enter Title" required><br>
                <label for="price">Price</label>
                <input style = "color : black" type="num" id="price" name="price" placeholder="Enter Price" required><br>
                <label for="image">Image</label>
                <input style = "color : black" type="file" id="image" name="image" required><br>
                <label for="description">Description</label>
                <input style = "color : black" type="text" id="description" name="description" placeholder="Enter Description" required><br>
                <input style = "color : black" type="submit" value="Save" >
            </div>
            
        </form> 
        <div style="position: relative ; top: 30px ; right: -30px ">
            <table style ="border:3px solid black" > 
            <tr >
                <th style ="padding : 30px; border:3px solid black">Title</th>
                <th style ="padding : 30px; border:3px solid black">Price</th>
                <th style ="padding : 30px; border:3px solid black">Description</th>
                <th style ="padding : 30px; border:3px solid black">Image</th>
                <th style ="padding : 30px; border:3px solid black">Action</th>
                <th style ="padding : 30px; border:3px solid black">Action2</th>

            </tr>
            @foreach($data as $data)
            <tr align ="center" >
                <td>{{$data->title}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->description}}</td>
                <td><img height = "200" width="200" src="/foodimage/{{$data->image}}" alt="Image"></td>
                <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
            </tr>
            @endforeach
            </table>
        </div> 
    </div>
    @include("admin.adminjs")
    
  </body>
</html>


</body>
</html>
