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
        <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Name</label>
                <input style = "color : black" type="text" name="name" placeholder="Enter Name" required><br>
                
                <label for="price">Speciality</label>
                <input style = "color : black" type="text" name="speciality" placeholder="Enter Speciality" required><br>
                
                <label for="image">Image</label>
                <input style = "color : black" type="file" name="image" required><br>
                
                <input style = "color : black" type="submit" value="Save" >
            </div>
            
        </form> 

        <div style="position: relative ; top: 30px ; right: -30px ">
            <table style ="border:3px solid black" > 
            <tr >
                <th style ="padding : 30px; border:3px solid black">Chef Name</th>
                <th style ="padding : 30px; border:3px solid black">Speciality</th>
                <th style ="padding : 30px; border:3px solid black">Image</th>
                <th style ="padding : 30px; border:3px solid black">Action</th>
                <th style ="padding : 30px; border:3px solid black">Action2</th>
            </tr>
            @foreach($data as $data)
            <tr align ="center" >
                <td>{{$data->name}}</td>
                <td>{{$data->speciality}}</td>
                <td><img height = "200" width="200" src="/chefimage/{{$data->image}}" alt="Image"></td>
                <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
                <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
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
