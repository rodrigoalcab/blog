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

/*
//Route::get('hello-world', '\\App\Http\Controllers\HelloWorldController@index');
Route::get('hello-world', [\App\Http\Controllers\HelloWorldController::class, 'index']);


Route::get('/post/{slug?}', function($slug = null) {
    return $slug;
})
->name('post.single');


Route::get('/user/{id}', function($slug = null) {
    return $slug;
})
->where(['id' => '[0-9]+']); 
*/

Route::prefix('admin')->group(function(){

    Route::prefix('posts')->name('posts.')->group(function(){
    
        Route::get('/create', [\App\Http\Controllers\Admin\PostController::class, 'create'])->name('create');
    
        Route::post('/store', [\App\Http\Controllers\Admin\PostController::class, 'store'])->name('store');
    
    });

});



Route::resource('/users', \App\Http\Controllers\UserController::class);