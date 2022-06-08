<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{url('update/id/'.$update->id)}}" method="post">
        @csrf 
        @method('put')
    <label for="title">    Movie</label>
    <input type="text" name="Movie" value="{{$update->Movie}}"  >
    <label >Movie Name</label>
    <input type="text" name="MovieName" value="{{$update->MovieName}}">
    <label >Movie Description</label>
    <input type="text" name="MovieDes" value="{{$update->MovieDes}}">
    <label >Movie Gener</label>
    <input type="text" name="MovieGen" value="{{$update->MovieGen}}">

    <button type="submit">update Item</button>
    </form>
</body>
</html>