@extends('layout')

@section('title', "Crear Usuario")

@section('content')
<br><br><br><br>
  
        <div class="card">
            <h4 class="card-header">Crear Usuario</h4>
            <div class="card-body">

      
        @if ($errors->any())
            <div class="alert alert-danger">
                <h6>Porfavor corrija los errores debajo:</h6>
            </div>

        @endif

      <form method="POST" action="{{ url('usuarios/store') }}">
            {!! csrf_field() !!}   

             <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Pedro Perez" value="{{ old('name') }}">    
                @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('name') }}</p>
                    </div>
                @endif
            </div>

            <br>

            <div class="form-group">
                <label for="email">Correo electronico:</label>
                <input type="email"  class="form-control" name="email" id="email" placeholder="pedro@example.com" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('email') }}</p>
                    </div>
                @endif
            </div>
            
            <br>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Mas de 6 caracteres" >
                @if ($errors->has('password'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('password') }}</p>
                    </div>
                @endif
            </div>

            <br>

            <div class="form-group">
            <label for="profession_id">Profesiones:</label>
            <select class="form-control" name="profession_id" id="profession_id">
                @foreach($professions as $profession)
                        <option value="{{ $profession->id }}">{{ $profession->title }}</option>
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

                <button type="submit" class="btn btn-primary">Crear usuario</button>
        
                <a href="{{ url('/usuarios/') }}" class="btn btn-link">Regresar al listado de usuarios</a>

            </div>







        </form>
        </div>
    </div>
@endsection