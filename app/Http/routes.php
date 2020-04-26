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

Route::get('newvote', function () {
    return view('newvote');
});

Route::get('final', function () {
    return view('final');
});

Route::get('termo', function () {
    return view('termo');
});

Route::auth();

Route::post('/post_checkbox', 'HomeController@post_checkbox');
Route::get('/get_vote/{nomeFoto}/{vote}/{idFoto}', 'HomeController@get_vote');
//Route::get('/finalizar_votacao', 'HomeController@finalizar_votacao'); FUNCAO DESATIVADA
Route::get('/', 'HomeController@welcome');
Route::get('/home', 'HomeController@index');
Route::get('/reload', 'HomeController@reload');