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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'NavigationController@goHome')->name('acasa');


Route::get('/', function () {
    return 'Hello World';
});

Route::get('/rezervari', 'NavigationController@goReservations')->name('rezervari');
Route::get('/preturi', 'NavigationController@goPrice')->name('preturi');
Route::get('/contact', 'NavigationController@goContact')->name('contact');

Route::post('/rezervari', 'ReservationsController@addReservation')->name('addReservation');

Route::post('/contact', 'ContactController@sendMessage')->name('sendMessage');

Auth::routes();

Route::get('/inregistrare','NavigationController@goRegister');
//Route::post('register', 'Auth\RegisterController@register');
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function (){
   return view('acasa');
});
