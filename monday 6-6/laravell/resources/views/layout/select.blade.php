@extends('layout.master')
@section ('title', 'table')
@section('contant')
<div class="card" style="width: 18rem;">
  <img src="../{{$sel->candy_img}}" class="card-img-top" alt="..."> 
  <div class="card-body">
    <h5 class="card-title">{{$sel->candy_name}}</h5>
    <p class="card-text">{{$sel->candy_price}}</p>
    <p class="card-text">{{$sel->candy_des}}<</p>
  </div>
</div>
@endsection