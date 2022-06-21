<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contato', function () {
    return view('contato');
});

Route::get('termos', function () {
    return view('termos');
});

//Route::get('hello-world', '\\App\Http\Controllers\HelloWorldController@index');
Route::get('hello-world', [\App\Http\Controllers\HelloWorldController::class, 'index']);
