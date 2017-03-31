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

//Route::get('/', 'SystemController@welcome');
Route::get('/', 'SystemController@index');
Route::get('/home', 'SystemController@home');
Route::get('/login', 'SystemController@login');
Route::post('/login', 'UsersController@loginU');
//Route::get('usuario/home','SystemController@home');
Route::get('/logout', 'SystemController@logout');
Route::get('/perfil', 'SystemController@perfil');
//Route::get('/perfil/{idUs}', 'SistemController@perfilPublico');

