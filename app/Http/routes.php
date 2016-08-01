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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', 'TransferenciaWarehouseController@index');
Route::get('/realizar-transferencia-stage-1',
           'TransferenciaWarehouseController@goPageRealizarTransferenciaStage1');

Route::post('/transferencia-stage-1',
            'TransferenciaWarehouseController@postTransferenciaStage1');

Route::get('/realizar-transferencia-stage-2',
           'TransferenciaWarehouseController@goPageRealizarTransferenciaStage2');
