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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('items', 'App\Http\Controllers\ItemController@index');
Route::get('items/{item}', 'App\Http\Controllers\ItemController@show');
Route::post('items', 'App\Http\Controllers\ItemController@store');
Route::put('items/{item}', 'App\Http\Controllers\ItemController@update');
Route::delete('items/{item}', 'App\Http\Controllers\ItemController@delete');

Route::get('categories', 'App\Http\Controllers\CategoryController@index');
Route::get('categories/{categories}', 'App\Http\Controllers\CategoryController@show');
Route::post('categories', 'App\Http\Controllers\CategoryController@store');
Route::put('categories/{categories}', 'App\Http\Controllers\CategoryController@update');
Route::delete('categories/{categories}', 'App\Http\Controllers\CategoryController@delete');

