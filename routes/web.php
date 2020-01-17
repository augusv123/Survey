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


Route::get('/abmPicklists', function () {
    return view('abmPicklists');
})->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/paises', 'PaisesController@index')->name('paises');
Route::post('/bajapais', 'PaisesController@baja')->name('bajapais');
Route::post('/crearpais', 'PaisesController@alta')->name('crearpais');
Route::post('/modificarpais', 'PaisesController@modificacion')->name('modificarpais');


Route::get('/provincias', 'ProvinciasController@index')->name('provincias');
Route::post('/bajaprovincia', 'ProvinciasController@baja')->name('bajaprovincia');
Route::post('/crearprovincia', 'ProvinciasController@alta')->name('crearprovincia');
Route::post('/modificarprovincia', 'ProvinciasController@modificacion')->name('modificarprovincia');



Route::get('/idiomas', 'PickListPickListIdiomasController@index')->name('idiomas');
Route::post('/bajaidioma', 'PickListPickListIdiomasController@baja')->name('bajaidioma');
Route::post('/crearidioma', 'PickListPickListIdiomasController@alta')->name('crearidioma');
Route::post('/modificaridioma', 'PickListPickListIdiomasController@modificacion')->name('modificaridioma');

