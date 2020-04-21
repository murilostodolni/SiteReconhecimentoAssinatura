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
    return view('welcome');
});

Route::auth();

Route::post('/post_checkbox', 'HomeController@post_checkbox');
Route::get('/get_vote/{nomeFoto}/{vote}/{idFoto}', 'HomeController@get_vote');
Route::get('/newvote', 'HomeController@newvote');
Route::get('/home', 'HomeController@index');
Route::get('/vote_intermediate', 'HomeController@vote_intermediate');
Route::get('/reload', 'HomeController@reload');
