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
//Route::get('/', [ 'as' => 'home', 'uses' => 'FrontendController@getHome']);

Route::get('/', 'PaginaController@home');

// Route::get('/', function () {
//     $lista = [
//         "Vai allo store",
//         "Vai al market",
//         "Vai al lavoro",
//         "Vai al concerto"
//         ];
    
//     // return view('benvenuto')->withTaskso($lista)->withFoo('foobar');
    
//     return view('benvenuto')->with(['taskso'=>$lista])->with([ 'foo'=> 'foobar']);
    
//     // return view('benvenuto', [
//     //     'taskso'=>$lista, //taskso è una nuovo array che passa i parametri alle altre pagine con il valore di $lista
//     //     'foo'=> 'foobar' // foo è una variablie che passa i parametri alle altre pagine e ha il valore stringa foobar
//     //     //'foo' => request('titolo') aggiungi sulla url ?titolo=
//     //     //'foo' => '<script> alert("marco") </script>' //lo usi con {!!foo!!}
        
//     //     ]); 
    
// });
//Route::get('/book/{id}', [ 'as' => 'bookDetail', 'uses' => 'FrontendController@getBookDetail']);

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/about', 'PaginaController@about');
Route::get('/contatto','PaginaController@contatto');

// Route::get('/contatto', function () {
//     return view('contatto');
// });