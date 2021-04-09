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

// Route::resource('posts', App\Http\Controllers\PostController::class); // works
Route::resource('posts', 'App\Http\Controllers\PostController'); // works
// Route::resource('posts', 'App\Http\Controllers\PostController', ['except' => ['create', 'edit']]); works but have exception
Route::get('/', function () {
    return view('welcome');
});
