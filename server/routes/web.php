<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::post('/login', 'AuthController@login');

Route::get('/', [
    'as' => 'login',
    function () { return view('loginPage'); }
])->middleware('guest');

Route::post('/exit', 'AuthController@logout');