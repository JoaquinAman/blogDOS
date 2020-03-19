@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
<br><br>
  
  <div class="card">
            <h4 class="card-header">Ver detalle</h4>
            <div class="card-body">
            
      <h5>Usuario id:{{ $user->id }}</h5>
      
<div class="form-group">
    
    <li class="form-control"> Nombre del usuario: {{ $user->name }}     </li>
    <li class="form-control"> Correo electronico: {{ $user->email }}    </li>
    <li class="form-control"> Profession_id: {{ $user->profession_id }} </li>
      
</div>



      <br><br>

      <p>
        <a href="{{ url('/usuarios/') }}" class="btn btn-primary">Regresar al listado de usuarios</a>
      </p>
      </div>
    </div>
@endsection