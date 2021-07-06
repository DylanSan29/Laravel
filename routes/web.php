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



Route::get('/home', function () {
    return view( 'mainpage');
});

Route::get('/usuarios', 'UserController@index');

Route::get('/usuario/nuevo', 'UserController@crear');

Route::get('/usuario/{id}', 'UserController@mostrar');

Route::get('/saludo/{name}/{nickname}', 'UserController@mostrar_nombre_nickname');

