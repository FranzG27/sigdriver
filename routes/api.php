<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/conductor', 'App\Http\Controllers\ConductorController@index');
Route::post('/conductor', 'App\Http\Controllers\ConductorController@store');
Route::put('/conductor/{id}', 'App\Http\Controllers\ConductorController@update');
Route::delete('/conductor/{id}', 'App\Http\Controllers\ConductorController@destroy');

Route::get('/microbus', 'App\Http\Controllers\MicrobusController@index');
Route::post('/microbus', 'App\Http\Controllers\MicrobusController@store');
Route::put('/microbus/{id}', 'App\Http\Controllers\MicrobusController@update');
Route::delete('/microbus/{id}', 'App\Http\Controllers\MicrobusController@destroy');

Route::get('/foto', 'App\Http\Controllers\FotoController@index');
Route::post('/foto', 'App\Http\Controllers\FotoController@store');
Route::delete('/foto/{id}', 'App\Http\Controllers\FotoController@destroy');


