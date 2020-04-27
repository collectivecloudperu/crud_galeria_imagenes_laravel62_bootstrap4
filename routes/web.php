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

// Ruta Página Principal
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/articulo', 'PostresController@index')->middleware('password.confirm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Ruta Dashboard
Route::get('admin/dashboard', 'Dashboard@index')->name('admin/dashboard');

// Rutas CRUD

/* Crear */
Route::get('admin/bicicletas/crear', 'BicicletasController@crear')->name('admin/bicicletas/crear');
Route::put('admin/bicicletas/store', 'BicicletasController@store')->name('admin/bicicletas/store');

/* Leer */
Route::get('admin/bicicletas', 'BicicletasController@index')->name('admin/bicicletas');

/* Actualizar */
Route::get('admin/bicicletas/actualizar/{id}', 'BicicletasController@actualizar')->name('admin/bicicletas/actualizar');
Route::put('admin/bicicletas/update/{id}', 'BicicletasController@update')->name('admin/bicicletas/update');

/* Eliminar */
Route::put('admin/bicicletas/eliminar/{id}', 'BicicletasController@eliminar')->name('admin/bicicletas/eliminar');

/* Eliminar imagen de un registro */
Route::get('admin/bicicletas/eliminarimagen/{id}{bid}', 'BicicletasController@eliminarimagen')->name('admin/bicicletas/eliminarimagen');

/* Vista para los detalles de un registro */
Route::get('admin/bicicletas/detallesproducto/{id}', ['as' => 'admin/bicicletas/detallesproducto', 'uses' => 'BicicletasController@detallesproducto']);
