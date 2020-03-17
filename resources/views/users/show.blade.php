@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
<br><br><br><br>
       <h1>Usuario #{{ $user->id }}</h1>

      <p> Nombre del usuario: {{ $user->name }} </p>
      <p> Correo electronico: {{ $user->name }} </p>

      <p>
        <a href="{{ url('/usuarios/') }}">Regresar Home</a>
      </p>

@endsection