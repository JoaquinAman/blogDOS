@extends('layout')



@section('content')
<br><br><br><br>
       
       
       
        @if(!empty($users))
            <ul>
                @foreach($users as $user)
                    <li>{{ $user }}</li>
                @endforeach
            </ul>
        @else
            <p>No hay usuarios registrados.</p>
        @endif
        <ul>
        <?php echo e("tiempo: ");?>{{  time() }}
        </ul>       
@endsection