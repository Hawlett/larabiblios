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

Route::get('/', 'PaginaController@home');

Route::get('/about', 'PaginaController@about');

Route::get('/contatto', 'PaginaController@contatto');


// Route::get('/', function () {
//     return view('welcome');
// });

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
