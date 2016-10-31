<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

$api = app('Dingo\Api\Routing\Router');
//Route::api(['version' => 'v1', 'prefix' => 'v1'], function() {
//
//    Route::resource('bycycles', 'BycyclesController', array('except' => array('create', 'edit')));
//
//});
$api->version('v1', function($api) {
    $api->resource('bycycles', 'App\Http\Controllers\BycyclesController');
});