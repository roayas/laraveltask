@extends('layout.master')
@section ('title', 'table')
@section('contant')
<body>
    <form action="{{url('update/id/'.$update->id)}}" method="post">
        @csrf
        @method('put')
        Name<input type="text" name="candy_name" value="{{$update->candy_name}}" >
        Price<input type="number" name="candy_price" value="{{$update->candy_price}}">
        qunitty<input type="number" name="candy_quantity" value="{{$update->candy_quantity}}">
        des<input type="text" name="candy_des" value="{{$update->candy_des}}">
        <button type="submit">Add</button>
    </form>
@endsection