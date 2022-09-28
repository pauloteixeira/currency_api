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

Route::get("v1/hc"          ,"Api\V1\\HealthCheckController@hc")->name("health.check");
Route::post("v1/code"       ,"Api\V1\\CurrencyController@code")->name("currencies.by.code");
Route::post("v1/code/list"  ,"Api\V1\\CurrencyController@codeList")->name("currencies.by.code.list");
Route::post("v1/number"     ,"Api\V1\\CurrencyController@number")->name("currencies.by.number");
Route::post("v1/number/list","Api\V1\\CurrencyController@numberList")->name("currencies.by.number.list");