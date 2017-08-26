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

Route::get('/', 'MapaController@index');
Route::get('/setor/{code}', 'MapaController@setor');
Route::get('/nome/{nome}', 'MapaController@nome');

//Route::get('/saibamais/{cnpj}', 'MapaController@saibaMais');

Route::get('/mapa/', 'MapaController@filtro');
Route::get('/maker', 'MapaController@teste');
Route::get('/grafico', 'GraficosController@index');

