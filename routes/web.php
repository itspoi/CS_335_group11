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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin-user', 'App\Http\Controllers\Admin\UserController@index');
Route::get('admin-user/create', 'App\Http\Controllers\Admin\UserController@create');
Route::post('admin-user/store', 'App\Http\Controllers\Admin\UserController@store')->name('admin-user.store');
Route::get('admin-user/edit/{id}', 'App\Http\Controllers\Admin\UserController@edit');
Route::post('admin-user/update/{id}', 'App\Http\Controllers\Admin\UserController@update')->name('admin-user.update');
Route::delete('admin-user/destroy/{id}' , 'App\Http\Controllers\Admin\UserController@destroy');