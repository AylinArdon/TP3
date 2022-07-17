<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/hola', function() {
    return 'Hola Mundo';

});

Route::get('/nombre/{usuario}', function($usuario) {
    return 'Saludo ' .$usuario;/*el valor del parametro usuario va a depender de lo que se escriba en la rut*/

});

                                           /**PARAMETROS OPCIONALES 
* Se idenfitifican con el signo de interrogacion '?'

                                           */
Route::get('/opcion/{name?}', function($name = null) {
     return $name;
});

Route::get('/user/{name?}', function($name = 'Jhon') {
    return $name;
});