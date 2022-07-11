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

/* Route::get('/', function () {
    return view('welcome');
}); */


//Route::get('hello-world', '\\App\Http\Controllers\HelloWorldController@index');
/* Route::get('hello-world', [\App\Http\Controllers\HelloWorldController::class, 'index']);


Route::get('/post/{slug?}', function($slug = null) {
    return $slug;
})
->name('post.single');


Route::get('/user/{id}', function($slug = null) {
    return $slug;
})
->where(['id' => '[0-9]+']); 

Route::prefix('posts')->name('posts.')->group(function(){

    Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

    Route::get('/create', [\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');

    Route::post('/save', [\App\Http\Controllers\PostController::class, 'save'])->name('posts.save');

});
*/
Route::resource('/users', \App\Http\Controllers\UserController::class);