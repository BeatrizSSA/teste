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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bia', function() {
	return view('my_views.bia');
});

Route::get('/hello/{nammme}/{a123}', 'UserController@sayHello');

Route::controller('eventos', 'EventosController');
 
