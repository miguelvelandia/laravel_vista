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
    return view('inicio');
});

Route::get('/home', 'HomeController@index')->name('home');

//Rutas de Categoria
Route::get('categoria',['as'=>'categoria.index', 'uses'=>'CategoriaController@index',]);
Route::get('categoria/create',['as'=>'categoria.create', 'uses'=>'CategoriaController@create',]);
Route::get('categoria/{id}/editar',['as'=>'categoria.editar', 'uses'=>'CategoriaController@edit',]);
Route::patch('categoria/{id}',['as'=>'categoria.update', 'uses'=>'CategoriaController@update',]);
Route::get('categoria/{id}/delete',['as'=>'categoria.delete', 'uses'=>'CategoriaController@delete',]);
Route::post('categoria',['as'=>'categoria.store', 'uses'=>'CategoriaController@store']);