@extends('layout')



@section('content')
<br><br><br><br>
       <?php echo("tre");?>
       <?php echo("tre");?>
       <?php echo("tre");?>
       <?php echo("asd");?>
       <?php echo("BERNARDO");?>

        @if(!empty($users))
            <ul>
                @foreach($users as $user)
                    <li>{{ $user }}</li>
                @endforeach
            </ul>
        @else
            <p>No hay usuarios registrados.</p>
        @endif

        {{ time() }}

@endsection