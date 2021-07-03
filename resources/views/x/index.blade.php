@extends('layouts.plantilla')

@section("title","index")
@section("content")
    <h1>INDEX</h1>
    <a href="{{route('x.create')}}">Crear Ejemplo</a>
    <ul>
        @foreach ($x as $item)
        <li>
            <a href="{{route('x.show',$item->id)}}">
                {{$item->name}}<!--MAPEO....-->
            </a>
        </li>            
        @endforeach
    </ul>
    {{$x->links()}}
@endsection()
