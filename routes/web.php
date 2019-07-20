<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//toda la informacion que se envia a esta ruta "registro", la pasa al "store".
Route::post('/registro','EmpleadoController@store');


Route::get('/registro','EmpleadoController@create');


// manda a llamar al metodo index cuando ponemos en el navegador: /mostrar_registros
Route::get('/mostrar_registros','EmpleadoController@index');


//mandamos a llamar al metodo show cuando le pasamos el parametro "id", se ponen entre {} cuando se pasa parametros
Route::get('/detalles/{id}','EmpleadoController@show');


Route::put('/editar/{id}','EmpleadoController@edit');