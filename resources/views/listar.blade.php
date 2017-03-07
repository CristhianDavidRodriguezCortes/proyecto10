@extends('layout.master')
@section('content')
<ul>
@foreach($pelis as $movies)
<li>
{{$movies->id}}
{{$movies->titulo}}
{{$movies->genero}}
{{$movies->protagonistas}}
{{$movies->idioma}}
{{$movies->duracion}}

<a href="{{url('editar',$movies->id)}}">editar peliculas</a>
<a href="{{url('eliminar',$movies->id)}}">eliminar peliculas</a>
</li>

@endforeach
</ul>
@endsection
