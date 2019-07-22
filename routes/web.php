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

Route::get('/','FuncionariosController@index')->name('home');

Route::get('/','PostoDeTrabalhoController@index')->name('postos');

Route::post('/add','FuncionariosController@addFuncionarioPost')->name('addFuncionario');

Route::post('/add','PostoDeTrabalhoController@addPostoPost')->name('addPosto');