<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Routes;
use App\Http\Controller\API\KurirController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

    Route::resource('kurir',KurirController::class);
    Route::get('kurir', 'KurirController@index');
    Route::post('kurir', 'KurirController@show');
    $router->post('/kurir/create','KurirController@create');
    $router->get('/kurir/index','KurirController@index');
});
