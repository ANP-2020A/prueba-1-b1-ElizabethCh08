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
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/



Route::get('products', 'ProductController@index');
Route::get('products/{id}', 'ProductController@show');
Route::post('products', 'ProductController@store');
Route::put('products/{id}', 'ProductController@update');
Route::delete('products/{id}', 'ProductController@delete');

Route::get('customers', 'CustomerController@index');
Route::get('customers/{id}', 'CustomerController@show');
Route::post('customers', 'CustomerController@store');
Route::put('customers/{id}', 'CustomerController@update');
Route::delete('customers/{id}', 'CustomerController@delete');
