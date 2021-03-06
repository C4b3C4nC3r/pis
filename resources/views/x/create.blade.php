@extends('layouts.plantilla')

@section("title","create")
@section("content")
    <h1>CREATE</h1>
    <form autocomplete="off" action="{{route('x.store')}}" method="POST">
        @csrf
        <hr><br>
        <label for="">
            Name: 
            <input value="{{old('name')}}" type="text" name="name">
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
            <textarea name="descripcion" cols="30" rows="10">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
        <br>
            <small>{{$message}}</small>
        <br>

        @enderror
        <hr><br>
        <label for="">
            Categoria: 
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria')
        <br>
            <small>{{$message}}</small>
        <br>

        @enderror
        <hr><br>
        
        <button type="submit">Save</button>
        <button type="reset">Reset</button>

    </form>
@endsection()
