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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('users', 'ApiUsersController@index');
Route::get('users/{user}', 'ApiUsersController@show');
Route::post('users', 'ApiUsersController@store');
Route::put('users/{user}', 'ApiUsersController@update');
Route::delete('users/{user}', 'ApiUsersController@delete');
