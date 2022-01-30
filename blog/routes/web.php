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


Route::get('/prueba', function () {
    return view('publicaciones.prueba');
})->name('prueba');