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

Route::get('admin-package', 'App\Http\Controllers\Admin\PackageController@index');
Route::get('admin-package/create', 'App\Http\Controllers\Admin\PackageController@create');
Route::post('admin-package/store', 'App\Http\Controllers\Admin\PackageController@store')->name('admin-package.store');
Route::get('admin-package/show/{id}', 'App\Http\Controllers\Admin\PackageController@show');
Route::get('admin-package/edit/{id}', 'App\Http\Controllers\Admin\PackageController@edit');
Route::post('admin-package/update/{id}', 'App\Http\Controllers\Admin\PackageController@update')->name('admin-package.update');
Route::delete('admin-package/destroy/{id}' , 'App\Http\Controllers\Admin\PackageController@destroy');

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
Route::get('admin-hotel/destroy/{id}' , 'App\Http\Controllers\Admin\HotelController@destroy');

Route::get('admin-transport', 'App\Http\Controllers\Admin\TransportController@index');
Route::get('admin-transport/create', 'App\Http\Controllers\Admin\TransportController@create');
Route::post('admin-transport/store', 'App\Http\Controllers\Admin\TransportController@store')->name('admin-transport.store');
Route::get('admin-transport/edit/{id}', 'App\Http\Controllers\Admin\TransportController@edit');
Route::post('admin-transport/update/{id}', 'App\Http\Controllers\Admin\TransportController@update')->name('admin-transport.update');
Route::delete('admin-transport/destroy/{id}' , 'App\Http\Controllers\Admin\TransportController@destroy')->name('admin-transport.destroy');

Route::get('admin-place', 'App\Http\Controllers\Admin\PlaceController@index');
Route::get('admin-place/create', 'App\Http\Controllers\Admin\PlaceController@create');
Route::post('admin-place/store', 'App\Http\Controllers\Admin\PlaceController@store')->name('admin-place.store');
Route::get('admin-place/edit/{id}', 'App\Http\Controllers\Admin\PlaceController@edit');
Route::post('admin-place/update/{id}', 'App\Http\Controllers\Admin\PlaceController@update')->name('admin-place.update');
Route::get('admin-place/destroy/{id}' , 'App\Http\Controllers\Admin\PlaceController@destroy');

Route::get('admin-booking', 'App\Http\Controllers\Admin\BookingController@index');
Route::get('admin-booking/create', 'App\Http\Controllers\Admin\BookingController@create');
Route::post('admin-booking/store', 'App\Http\Controllers\Admin\BookingController@store')->name('admin-booking.store');
Route::get('admin-booking/edit/{id}', 'App\Http\Controllers\Admin\BookingController@edit');
Route::post('admin-booking/update/{id}', 'App\Http\Controllers\Admin\BookingController@update')->name('admin-booking.update');
Route::delete('admin-booking/destroy/{id}' , 'App\Http\Controllers\Admin\BookingController@destroy');

Route::get('admin-payment', 'App\Http\Controllers\Admin\PaymentController@index');
Route::get('admin-payment/create', 'App\Http\Controllers\Admin\PaymentController@create');
Route::post('admin-payment/store', 'App\Http\Controllers\Admin\PaymentController@store')->name('admin-payment.store');
Route::get('admin-payment/edit/{id}', 'App\Http\Controllers\Admin\PaymentController@edit');
Route::post('admin-payment/update/{id}', 'App\Http\Controllers\Admin\PaymentController@update')->name('admin-payment.update');
Route::delete('admin-payment/destroy/{id}' , 'App\Http\Controllers\Admin\PaymentController@destroy');

Route::get('trs-home', 'App\Http\Controllers\HomeController@trsIndex')->name('trs-home');

Route::get('trs-package', 'App\Http\Controllers\Trs\PackageController@index');
Route::get('trs-package/show/{id}', 'App\Http\Controllers\Trs\PackageController@show');

Route::get('trs-booking', 'App\Http\Controllers\Trs\BookingController@index');
Route::get('trs-booking/create', 'App\Http\Controllers\Trs\BookingController@create');
Route::post('trs-booking/store', 'App\Http\Controllers\Trs\BookingController@store')->name('trs-booking.store');

Route::get('trs-payment', 'App\Http\Controllers\Trs\PaymentController@index');
Route::get('trs-payment/create', 'App\Http\Controllers\Trs\PaymentController@create');
Route::post('trs-payment/store', 'App\Http\Controllers\Trs\PaymentController@store')->name('trs-payment.store');

// this is the pages Controller
Route::get('/', 'App\Http\Controllers\PageController@getHome')->name('welcome');

Route::get('/destination', 'App\Http\Controllers\PageController@getDestination')->name('destination');

Route::get('/packages', 'App\Http\Controllers\PageController@getPackages')->name('packages');

Route::get('/special offers', 'App\Http\Controllers\PageController@getSpecialOffers')->name('special offers');

Route::get('/blog', 'App\Http\Controllers\PageController@getBlog')->name('blog');

Route::get('/subscription', 'App\Http\Controllers\PageController@getSubscription')->name('subscription');

Route::get('/book now', 'App\Http\Controllers\PageController@getBookNow')->name('book now');

