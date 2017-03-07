@extends('layout.master')
@section('content')
<h1> -actualizar pelicula- </h1>
<form method="post" action="{{url('actualizar',$pelis->id)}}"> 
{!!csrf_field()!!}
<input type="text" name="id" value="{{$pelis->id}}">
<input type="text" name="titulo" value="{{$pelis->titulo}}">
<input type="text" name="protagonistas" value="{{$pelis->protagonistas}}">
<input type="text" name="idioma" value="{{$pelis->idioma}}">
<input type="text" name="duracion" value="{{$pelis->duracion}}">
<input type="submit" name="actualizar pelicula">
</form>
@endsection