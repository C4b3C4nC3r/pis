@extends('layouts.plantilla')

@section("title","update")
@section("content")
    <h1>UPDATE</h1>
    <form autocomplete="off" action="{{route('x.update',$x)}}" method="POST">
        @csrf
        @method('put')
        <hr><br>
        <label for="">
            Name: 
            <input type="text" name="name" value="{{old('name',$x->name)}}">
        </label>
        @error('name')
        <br>
            <small>{{$message}}</small>
        <br>

        @enderror
        <hr><br>
        <label for="">
            Descripcion: 
            <br>
            <textarea name="descripcion" cols="30" rows="10">{{old('descripcion',$x->descripcion)}}</textarea>
        </label>
        @error('descripcion')
        <br>
            <small>{{$message}}</small>
        <br>

        @enderror
        <hr><br>
        <label for="">
            Categoria: 
            <input type="text" name="categoria" value="{{old('categoria',$x->categoria)}}">
        </label>
        @error('categoria')
        <br>
            <small>{{$message}}</small>
        <br>

        @enderror
        <hr><br>
        <button type="submit">Update</button>
        <button type="reset">Reset</button>

    </form>
@endsection()
