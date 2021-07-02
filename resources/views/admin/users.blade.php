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
    <!-- container-scroller -->
    <div style="position: relative ; top: 30px ; right: -30px ">
      <table style ="border:3px solid black" > 
      <tr >
        <th style ="padding : 30px; border:3px solid black">Name</th>
        <th style ="padding : 30px; border:3px solid black">Email</th>
        <th style ="padding : 30px; border:3px solid black">Action</th>
      </tr>
      @foreach($data as $data)
      <tr align ="center">
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        @if($data->usertype=="0")
          <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
        @else
          <td>Not Allowed</td>
        @endif
      </tr>
      @endforeach
      <!-- <tr align ="center" >
        <td>Eve</td>
        <td>Jackson</td>
        <td><a href="">Delete</a></td>
      </tr> -->
    </table>
  </div>
  </div>
    @include("admin.adminjs")
    
  </body>
</html>


</body>
</html>
