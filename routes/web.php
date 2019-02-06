<?php

use App\Http\Controllers\CaballoController;

/*
|--------------------------------------------------------------------------
| Rutas web
|--------------------------------------------------------------------------
|
| Aqui es donde registro las rutas para la aplicación. EStas rutas son cargadas por 
| El servicio provedor de rutas  dentro de un grupo el cual 
| contiene el grupo middleware "web". Hora crea algo asombroso
|
*/

// La secciones de la ruta Clase ruta::metodoWeb(NombreRuta, controladorQueManejaElEvento@funcionDelControlador)

// 00 Página principal del sistema
Route::get('', 'CaballoController@index');

// 01 Todos los datos de los caballos
Route::get('/Ver','CaballoController@index');

// 02  Mejor Caballo  de la competencia
Route::get('/CaballoCampeon','CaballoController@showCampeon');

// 03 Peor caballo
Route::get('/CaballoPeor','CaballoController@showPeor');

// 04 Caballo más viejo de la competencia
Route::get('/CaballoViejo','CaballoController@showViejo');

//05 Formulario registrar caballo
Route::get('/Registrar','CaballoController@WriteRegistrar');
 //Pendiente: falta hacer la función en el controlador




