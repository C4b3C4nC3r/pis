@extends('layouts.plantilla')

@section("title","x".$x->name)<!--Titulo de la pestana-->
@section("content")
    
    <h1>SHOW </h1>
    <a href="{{route('x.index')}}">Return</a>
    <a href="{{route('x.update',$x)}}">To Update</a>
    <br>
    <b>
        {{$x->name}}
    </b>
    <p style="width: 300px;">
        {{$x->descripcion}}
    </p>
    <p>
        <Strong>Category</Strong>
        {{$x->categoria}}
    </p>
    

@endsection()
