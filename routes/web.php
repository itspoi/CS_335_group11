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

Route::get('/home', function(){
	if (Auth::user()->roles[0]['name']=='Admin') {
		return redirect('admin-home');
	}else{
		return redirect('trs-home');
	}
});

Route::get('admin-home', 'App\Http\Controllers\HomeController@adminIndex')->name('admin-home');

Route::get('admin-user', 'App\Http\Controllers\Admin\UserController@index');
Route::get('admin-user/create', 'App\Http\Controllers\Admin\UserController@create');
Route::post('admin-user/store', 'App\Http\Controllers\Admin\UserController@store')->name('admin-user.store');
Route::get('admin-user/edit/{id}', 'App\Http\Controllers\Admin\UserController@edit');
Route::post('admin-user/update/{id}', 'App\Http\Controllers\Admin\UserController@update')->name('admin-user.update');
Route::delete('admin-user/destroy/{id}' , 'App\Http\Controllers\Admin\UserController@destroy');

Route::get('admin-hotel', 'App\Http\Controllers\Admin\HotelController@index');
Route::get('admin-hotel/create', 'App\Http\Controllers\Admin\HotelController@create');
Route::post('admin-hotel/store', 'App\Http\Controllers\Admin\HotelController@store')->name('admin-hotel.store');
Route::get('admin-hotel/edit/{id}', 'App\Http\Controllers\Admin\HotelController@edit');
Route::post('admin-hotel/update/{id}', 'App\Http\Controllers\Admin\HotelController@update')->name('admin-hotel.update');
Route::delete('admin-hotel/destroy/{id}' , 'App\Http\Controllers\Admin\HotelController@destroy');

Route::get('admin-transport', 'App\Http\Controllers\Admin\TransportController@index');
Route::get('admin-transport/create', 'App\Http\Controllers\Admin\TransportController@create');
Route::post('admin-transport/store', 'App\Http\Controllers\Admin\TransportController@store')->name('admin-transport.store');
Route::get('admin-transport/edit/{id}', 'App\Http\Controllers\Admin\TransportController@edit');
Route::post('admin-transport/update/{id}', 'App\Http\Controllers\Admin\TransportController@update')->name('admin-transport.update');
Route::delete('admin-transport/destroy/{id}' , 'App\Http\Controllers\Admin\TransportController@destroy');

Route::get('admin-place', 'App\Http\Controllers\Admin\PlaceController@index');
Route::get('admin-place/create', 'App\Http\Controllers\Admin\PlaceController@create');
Route::post('admin-place/store', 'App\Http\Controllers\Admin\PlaceController@store')->name('admin-place.store');
Route::get('admin-place/edit/{id}', 'App\Http\Controllers\Admin\PlaceController@edit');
Route::post('admin-place/update/{id}', 'App\Http\Controllers\Admin\PlaceController@update')->name('admin-place.update');
Route::delete('admin-place/destroy/{id}' , 'App\Http\Controllers\Admin\PlaceController@destroy');

Route::get('trs-home', 'App\Http\Controllers\HomeController@trsIndex')->name('trs-home');