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

Route::get('/', function () {
    return view('welcome');

    Route::get('kurir', 'KurirController@index');
    Route::post('kurir', 'KurirController@create');
    $router->post('/kurir/create','KurirController@create');
    $router->get('/kurir/index','KurirController@index');
});
