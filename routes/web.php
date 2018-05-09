<?php

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

Route::get('/', 'HomeController@index')->name('main.page');
Route::get('/admin', 'HomeController@showAdminPanel')->name('admin.page');


Auth::routes();


Route::resource('dishes', 'DishController');

Route::post('/reservations', 'ReservationController@store')->name('reservations.store');

// Route::get("/email", function() {
//    Mail::raw('Now I know how to send emails with Laravel', function($message)
// 	{
// 		$message->subject('Hi There!!');
// 		$message->from(config('mail.from.address'), config("app.name"));
// 		$message->to('montvidas.arturas@gmail.com');
// 	});
// });
