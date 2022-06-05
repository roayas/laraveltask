@extends('layout.master')
@section ('title', 'About')
@section('contant')
<h1>
        Hi  This is About page
    </h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolores nisi consequatur exercitationem praesentium totam sapiente voluptatibus nam voluptate. Magnam facilis eos dolores nostrum autem iusto, laborum assumenda rem aliquid.
    </p><br>
    @foreach ($arr as $arr)
        <li>{{ $arr }}</li>
        @endforeach
@endsection