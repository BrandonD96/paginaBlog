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
| TEST CODE
Route::get('/hola', function () {
    echo "mi primer hola mundo desde laravel";
});
Route::get('/vista', function () {
    $n1=5;
    $n2=10;
    $total = $n1+$n2;
    return view('inicio', compact('total'));
});
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/clienteservidor', function () {
    return view('publicaciones.clienteservidor');
})->name('clienteservidor');

Route::get('/computadora_central_y_dedicada', function () {
    return view('publicaciones.computadora_central_y_dedicada');
})->name('computadora_central_y_dedicada');

Route::get('/conexion_de_sistemas', function () {
    return view('publicaciones.conexion_de_sistemas');
})->name('conexion_de_sistemas');

Route::get('/arquitectura_cliente_servidor', function () {
    return view('publicaciones.arquitectura_cliente_servidor');
})->name('arquitectura_cliente_servidor');

Route::get('/conceptos_de_sistemas', function () {
    return view('publicaciones.conceptos_de_sistemas');
})->name('conceptos_de_sistemas');

Route::get('/evolución_de_los_sistemas', function () {
    return view('publicaciones.evolución_de_los_sistemas');
})->name('evolución_de_los_sistemas');

Route::get('/protocolos', function () {
    return view('publicaciones.protocolos');
})->name('protocolos');


Route::get('/clasificar_los_sistemas', function () {
    return view('publicaciones.clasificar_los_sistemas');
})->name('clasificar_los_sistemas');

Route::get('/diagramacion_de_componentes', function () {
    return view('publicaciones.diagramacion_de_componentes');
})->name('diagramacion_de_componentes');

