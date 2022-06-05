@extends('layout.master')
@section ('title', 'table')
@section('contant')

<button><a href="{{url('add')}}">add item</a></button>

<table class="table">
    <tr>
    <th scope="col">id</th>
    <th scope="col">Name</th>
    <th>price</th>
    <th scope="col">img</th>
    <th scope="col">des</th>
    </tr>
    @foreach($data as $i)
    <tr>
    <td>{{$i->id}}</td>
    <td>{{$i->candy_name}}</td>
    <td>{{$i->candy_price}}</td>
    <td><img height="50px" width="50" src="{{$i->candy_img}}"> </td>
    <td>{{$i->candy_des}}</td>
    <td><button><a href="{{ url('delete/id/'.$i->id) }}">delete</button></a></td>
    <td><button><a href="{{ url('edit/id/'.$i->id) }}">edit</a></button></td>
    <td><button><a href="{{ url('select/id/'.$i->id) }}">select</a></button></td>
    </tr>
    @endforeach

    </table>
@endsection