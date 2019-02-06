<!-- Este documento se activa por la funcion index() de la clase CaballoController-->
<!-- Bueno aquí están los bloques de código HTML para añadir lineas de codigo a 'welcome.blade.php'-->
<!-- dividido en modulos  o secciones -->

<!-- Si no se pone Extends welcome.blade.php, no puede acceder a estos bloques de HTML, Welcome es la vista principal -->
@extends ('welcome')


<!-- las secciones   -->
@section ('content')
<!-- Un buscador de información sobre los caballos y un formulario para mostrarlos -->

<!-- container cuerpo -->
<div class="container">        
    <!-- Renglon 1: Busqueda de nombre de caballos -->
    <div class="row">
        <!-- columna 1 -->
        <div class="col-6">     
                <!-- Por acá debe de mostrar una lista desplegable de los caballos -->
            <div class="form-group">
                <p>
                    <label for="listaCaballos">Lista de caballos:</label>

                    <select class="form-control" name="listaCaballos">
                        <option selected>Elige un caballo</option>
                        
                        @foreach($consListaCaballos as $caballo)
                            <option>{{ $caballo->Nombre}}</option>
                        @endforeach
                    </select>
                </p>
            </div><!-- Fin del div.formgrup para lista deplegable -->
        </div> <!-- Fin columna 1 cuerpo-->

        <!-- Columna 2 cuerpo -->
        <div class="col-6">
                    <!--Agrupar controles en secciones y darle espaciado automatico campo y etiquetado-->
                <div class="form-group">

                    <p>
                        <!-- Parrafo usado para las etiquetas de campo buscar nombre -->
                        <label for="listaCaballos">Buscar caballo por nombre:
                        </label>
                        <input class="form-control mr-2" type="text" id="listaCaballos" placeholder="" list="caballos" />
                        <datalist id="caballos">
                                        @foreach($consListaCaballos as $caballo)
                                            <option value="{{ $caballo->Nombre}}">
                                        @endforeach
                                    </datalist>
            
                    </p><!-- Fin parrafo usado para las etiqutas de campo buscar por nombre -->
                </div><!-- Fin div para agrupación de campo busqueda -->
        </div> <!-- Fin columna 2 cuerpo-->

    </div> <!-- Termina el renglon 1 cuerpo -->
    
    

    <!-- Renglo 2: Carga la información a detalle del caballo elegido  -->
    <div class="row"> 

        <!-- columna 1, 2 renglon cuerpo -->
        <div class="col-12"> 

                <h2>Informaci&oacute;n detallada</h2>
                <div class="form-group">
                    <label>Imagen</label>
                </div>
        
                <div class="form-group">
                    <label>Nombre</label>
                </div>
        
                <div class="form-group">
                    <label>Raza</label>
                </div>
        
        
                <div class="form-group">
                    <label>Edad</label>
                </div>
        
        
                <div class="form-group">
                    <label>Puntuaje</label>
                </div>
        </div><!-- Fin columna 1, 2 renglon cuerpo -->
    </div> <!-- Fin renglon 2 cuerpo -->
        

    </div> <!-- Termina container del cuerpo -->
@endsection

