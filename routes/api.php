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

Route::get('/product/{id}', 'OrderController@getProduct');
Route::post('/cart', 'OrderController@addToCart');
Route::get('/cart', 'OrderController@getCart');
Route::get('/ammount', 'OrderController@getAmmount');
Route::delete('/cart/{id}', 'OrderController@removeCart');
Route::get('/chart', 'DashboardController@getChart');