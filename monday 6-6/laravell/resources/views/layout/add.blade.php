@extends('layout.master')
@section ('title', 'table')
@section('contant')
<body>
    <form action="{{ url('add') }}" method="post">
        @csrf
        Name<input type="text" name="candy_name">
        Price<input type="number" name="candy_price">
        qunitty<input type="number" name="candy_quantity">
        des<input type="text" name="candy_des">
        <button type="submit">Add</button>
    </form>
@endsection