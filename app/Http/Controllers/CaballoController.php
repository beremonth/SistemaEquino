<?php
// El namespace debe estar siempre primero, sino da error
namespace App\Http\Controllers;

//Importo el modelo Caballo para acortar las lineas de codigo de las consultas
use App\Caballo;

use Illuminate\Http\Request;
// Esta es la clase y el controlador principal para la tabla Caballo
class CaballoController extends Controller
{
    // protected Indica explicitamente la conexion que debe ser usada para conectarse a la base de datos
    

    //1°Función principal que se ejecuta al cargar la página principal
    public function index()
    {
        // $consListaCaballos = Trae todos los registros que hay en la tabla Caballo de la BD SistemaEquino
        $consListaCaballos = Caballo::All();
        // Regresar la vista index y pasar como argunmento la variable $consListaCaballos
        return view('funciones.index', compact('consListaCaballos'));
    }

    //2° Función
    public function showCampeon()
    {
        // Consulta del maximo valor en puntuaje,
        $consPuntuajeMaximo = Caballo::max('Puntuaje');
        $consMejorCaballo = Caballo::where('Puntuaje', $consPuntuajeMaximo)->get();
        return view('funciones.CaballoCampeon', compact('consMejorCaballo'));
    }

    //3° Función
    public function showPeor()
    {
        $consPuntuajeMinimo = Caballo::min('Puntuaje');
        $consPeorCaballo = Caballo::WHERE('Puntuaje', $consPuntuajeMinimo)-> get();
        return view('funciones.CaballoPeor', compact('consPeorCaballo'));
    }

    //4° Función 
    public function showViejo()
    {
        $consEdadMaxima = Caballo::max('Edad');
        $consDatosCaballoViejo = Caballo::WHERE('Edad',$consEdadMaxima)->get();
        return view('funciones.CaballoViejo', compact('consDatosCaballoViejo'));
    }
}



