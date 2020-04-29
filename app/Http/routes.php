<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('final', function () {
    return view('final');
});

Route::get('termo', function () {
    return view('termo');
});

Route::get('pesquisa-finalizada', function () {
    return view('pesquisa-finalizada');
});

Route::auth();

Route::post('/post_checkbox', 'HomeController@post_checkbox');
//Route::get('/finalizar_votacao', 'HomeController@finalizar_votacao'); FUNCAO DESATIVADA
Route::get('/informacao', 'HomeController@informacao');
Route::get('/home', 'HomeController@index');
Route::get('/newvote', 'HomeController@novo_voto');
Route::get('/reload', 'HomeController@reload');