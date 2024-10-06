<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('hello/{name}', function($name)
{
    return "Hello " . $name;
});

Route::get('hello-post/{name}', '\App\Http\Controllers\HelloWorldController@hello');
*/

Route::get('bands', '\App\Http\Controllers\BandController@getAll');
Route::post('bands/store', '\App\Http\Controllers\BandController@store');
Route::get('bands/gender{gender}', '\App\Http\Controllers\BandController@getBandsByGender');
Route::get('bands/{id}', '\App\Http\Controllers\BandController@getById');


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


