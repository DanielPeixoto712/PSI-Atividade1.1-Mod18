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






//EDIÇOES


Route::get('/edicoes', 'App\Http\Controllers\EdicoesController@index')->name('edicoes.index');

Route::get('/edicoes/{id}/show', 'App\Http\Controllers\EdicoesController@show')->name('edicoes.show');


//Livros

Route::get('/livros', 'App\Http\Controllers\LivrosController@index')->name('livros.index');

Route::get('/livros/{id}/show', 'App\Http\Controllers\LivrosController@show')->name('livros.show');


Route::get('/livros/create', 'App\Http\Controllers\LivrosController@create')->name('livros.create');

Route::post('/livros', 'App\Http\Controllers\LivrosController@store')->name('livros.store');

Route::get('/livros/{id}/edit', 'App\Http\Controllers\LivrosController@edit')->name('livros.edit');

Route::patch('/livros', 'App\Http\Controllers\LivrosController@update')->name('livros.update');

Route::get('/livros/{id}/delete', 'App\Http\Controllers\LivrosController@delete')->name('livros.delete');

Route::delete('/livros', 'App\Http\Controllers\LivrosController@destroy')->name('livros.destroy');


//Generos
Route::get('/generos', 'App\Http\Controllers\GenerosController@index')->name('generos.index');

Route::get('/generos/{id}/show', 'App\Http\Controllers\GenerosController@show')->name('generos.show');



Route::get('/generos/create', 'App\Http\Controllers\GenerosController@create')->name('generos.create');

Route::post('/generos', 'App\Http\Controllers\GenerosController@store')->name('generos.store');

Route::get('/generos/{id}/edit', 'App\Http\Controllers\GenerosController@edit')->name('generos.edit');

Route::patch('/generos', 'App\Http\Controllers\GenerosController@update')->name('generos.update');

Route::get('/generos/{id}/delete', 'App\Http\Controllers\GenerosController@delete')->name('generos.delete');

Route::delete('/generos', 'App\Http\Controllers\GenerosController@destroy')->name('generos.destroy');





//Editoras
Route::get('/editoras', 'App\Http\Controllers\EditorasController@index')->name('editoras.index');

Route::get('/editoras/{id}/show', 'App\Http\Controllers\EditorasController@show')->name('editoras.show');



Route::get('/editoras/create', 'App\Http\Controllers\EditorasController@create')->name('editoras.create');

Route::post('/editoras', 'App\Http\Controllers\EditorasController@store')->name('editoras.store');

Route::get('/editoras/{id}/edit', 'App\Http\Controllers\EditorasController@edit')->name('editoras.edit');

Route::patch('/editoras', 'App\Http\Controllers\EditorasController@update')->name('editoras.update');

Route::get('/editoras/{id}/delete', 'App\Http\Controllers\EditorasController@delete')->name('editoras.delete');

Route::delete('/editoras', 'App\Http\Controllers\EditorasController@destroy')->name('editoras.destroy');
 

 //Autores
Route::get('/autores', 'App\Http\Controllers\AutoresController@index')->name('autores.index');

Route::get('/autores/{id}/show', 'App\Http\Controllers\AutoresController@show')->name('autores.show');


Route::get('/autores/create', 'App\Http\Controllers\AutoresController@create')->name('autores.create');

Route::post('/autores', 'App\Http\Controllers\AutoresController@store')->name('autores.store');

Route::get('/autores/{id}/edit', 'App\Http\Controllers\AutoresController@edit')->name('autores.edit');

Route::patch('/autores', 'App\Http\Controllers\AutoresController@update')->name('autores.update');

Route::get('/autores/{id}/delete', 'App\Http\Controllers\AutoresController@delete')->name('autores.delete');

Route::delete('/autores', 'App\Http\Controllers\AutoresController@destroy')->name('autores.destroy');