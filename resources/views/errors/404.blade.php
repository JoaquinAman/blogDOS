@extends('layout')

@section('title', "Pagina no encontrada")

@section('content')
<br><br><br><br>
<ul>
      <h1> Pagina no encontrada </h1>
      <br>
      <p>
        <a href="{{ url('/usuarios/') }}">Regresar al listado de usuarios</a>
      </p>
          
</ul> 
@endsection