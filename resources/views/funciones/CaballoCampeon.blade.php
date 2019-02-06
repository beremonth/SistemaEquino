@extends('welcome')

@section('content')
    <div class="container">
            <h1>Caballo ganador</h1>
            <p>
                <label for="">Nombre
                </label><br>
                <!--?php xdebug_break(); ?-->
        
                @foreach($consMejorCaballo as $caballo)
                            {{$caballo->Nombre}}
                @endforeach
            </p>
        
            <p>
                <label for="">Puntuaci&oacute;n
                </label><br>{{$caballo->Puntuaje}}
            </p>
    </div>
@endsection