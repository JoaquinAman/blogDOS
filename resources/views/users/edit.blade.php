@extends('layout')

@section('title', "Editar Usuario")

@section('content')
<br><br>
<div class="card">
            <h4 class="card-header">Actualizar usuario</h4>
            <div class="card-body">
            
      <h5>Numero ID: {{ $user->id }}</h5>
      
      <div class="form-group">

        @if ($errors->any())
            <div class="alert alert-danger">
                <h6>Por favor corrija los errores debajo:</h6>
            </div>

        @endif
        
        <form method="POST" action='{{ url("usuarios/{$user->id}/update") }}'>
            {{ method_field('PUT') }}
            {!! csrf_field() !!}   

            <label for="name" class="form-control">Nombre:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="form-control">
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    <p>{{ $errors->first('name') }}</p>
                </div>
            @endif
            

            <br>
            <label for="email" class="form-control">Correo electronico:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="form-control">
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    <p>{{ $errors->first('email') }}</p>
                </div>
            @endif
            
            
            
            <br>
            <label for="password" class="form-control">Contraseña:</label>
            <input type="password" name="password" id="password" placeholder="Mas de 6 caracteres" class="form-control">
            @if ($errors->has('password'))
                <div class="alert alert-danger">
                    <p>{{ $errors->first('password') }}</p>
                </div>
            @endif

            <br>
            <label for="profession_id" class="form-control">Profesion:</label>
            
            
            <select name="profession_id" id="profession_id" class="form-control">
                @foreach($professions as $profession)
                    @if ($user->profession_id == $profession->id)
                            <option value="{{ $profession->id }}" selected>{{ $profession->title }}</option>
                    @else
                        <option value="{{ $profession->id }}">{{ $profession->title }}</option>
                    @endif
                @endforeach
            </select>
            @if ($errors->has('profession_id'))
                <div class="alert alert-danger">
                    <p>{{ $errors->first('profession_id') }}</p>
                </div>
            @endif
            
            </div>
            <br>
            <div class="d-flex justify-content-between align-items-end mb-2">

            <button type="submit"class="btn btn-primary">Actualizar usuario</button>
            <a href="{{ url('/usuarios/') }}" class="btn btn-link">Regresar al listado de usuarios</a>

            </div>
      </form>
     
      </div>
    </div>

  
@endsection