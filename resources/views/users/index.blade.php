@extends('layout')

@section('content')
<br><br><br><br>
      <h1> {{$title}} </h1>

       
       
        @if(!empty($users))
            <ul>
                @foreach($users as $user)
                    <li>{{ $user->name }},  {{ $user->email }} 
                    <a href="{{ url('/usuarios/'.$user->id) }}">Ver Detalles</a> 
                    
                    </li>
                   
                    
                    
                    <!-- <li>{{ $user->email }}</li>
                    <li>{{ $user->profession_id }}</li> -->
                    
                @endforeach
            </ul>
        @else
            <p>No hay usuarios registrados.</p>
        @endif
           
@endsection