@extends('layout.master')
@section ('title', 'Home')
@section('contant')

<div class="container">
    @foreach($data as $i)
    <div class="col-3">
    <img height="250px" src="{{$i->candy_img}}">
    <h4>{{$i->candy_name}}</h4>
    <p>{{$i->candy_price}}</p>
    <p>{{$i->candy_des}}</p>
    </div>
    @endforeach
    <div class="col-3">
    <img height="250px" src="{{asset('css/candy1.jpg')}}">
    <h4>candy 1</h4>
    <p>10</p>
    <p>dsdh</p>
    </div>

</div>
@endsection