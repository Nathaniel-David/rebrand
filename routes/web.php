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

Auth::routes();

Route::resource('apps', 'AppController');

Route::resource('blog', 'BlogController');

Route::get('/welcome', 'HomeController@index');

Route::post('/contact', 'HomeController@contact');

Route::get('/resume', 'HomeController@resume');

Route::post('/generateIpsum','AppController@generateIpsum');

