<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//*

Route::get('/', function () {
    return view('welcome');
});

/*
route::get('index', 'examplecontroller@index')
{
	return view('index')
};

route::get('mensaje', 'examplecontroller@index')
{
	return (mostrarMensaje())
};

route::get('nombre/[nombre]', 'examplecontroller@index')
{
	return (mostrarNombre($nombre))
};

*/

Route::get('cinema', function(){
	return view('cinema');
});

Route::post('cinema','peliculascontroller@guardar');


Route::get('listar','peliculascontroller@index');


Route::get('editar/{id}', 'peliculascontroller@editar');

Route::post('actualizar/{id}', 'peliculascontroller@actualizar');

Route::get('eliminar/{id}', 'peliculascontroller@eliminar');
/*
Route::get('productos', function() {
	return view('productos');
});	

Route::get('user/{id}', function($id)
{
	return ('usuario' .$id);
})
-> where ('id', '[0-9]+');

Route::get('nombre/{name}', function($name)
{
	return 'nombre' .$name;
})
-> where ('name', '[A-Z a-z]+');

*/

