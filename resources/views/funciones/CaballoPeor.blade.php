@extends('welcome')

@section('content')
<div class="container">
        <h1>Este es el peor calificado</h1>

        <p>
            @foreach($consPeorCaballo as $caballo)
                <label for="">Nombre
                </label><br>
                {{ $caballo ->Nombre }}
            @endforeach
        </p>
    
        <p>
            <label for="">Puntuaci&oacute;n
            </label><br>
                {{ $caballo ->Puntuaje }}
        </p>
</div>
    
@endsection
    

