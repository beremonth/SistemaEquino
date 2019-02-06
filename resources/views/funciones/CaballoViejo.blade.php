@extends('welcome')

@section('content')
<div class="container">
        <h1>Caballo m&aacute;s longevo</h1>
        <p>
            @foreach($consDatosCaballoViejo as $caballo)
                <label for="">Nombre
                </label><br>
                {{ $caballo ->Nombre }}
        </p>
    
        <p>
            <label for="">Edad
            </label><br>
            {{ $caballo->Edad}}
        @endforeach
</div>

@endsection
