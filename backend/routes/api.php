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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'habitudes'], function()
{
    Route::get('/', ['uses' => 'HabitudeController@all']);
    Route::post('/', ['uses' => 'HabitudeController@create']);
    Route::put('/{id}', ['uses' => 'HabitudeController@update']);
    Route::delete('/{id}', ['uses' => 'HabitudeController@delete']);
});


Route::group(['prefix' => 'todo'], function()
{
    Route::get('/{$date}', ['uses' => 'TodoController@get']);
    Route::post('/', ['uses' => 'TodoController@create']);
    Route::delete('/{id}', ['uses' => 'TodoController@delete']);
});
