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
// list all breed
Route::get('/breeds', 'BreedController@index')->name('list-breeds');
// show form create cat
Route::get('cats/create', 'CatController@create')->name('create-cats');
// store cat
Route::post('/cats', 'CatController@store')->name('cats-store');

//list cat
Route::get('/cats', 'CatController@index')->name('list-cats');

//show form edit cat
Route::get('/cats/{id}/edit', 'CatController@edit')->name('edit-cat');
// update cat
Route::put('/cats/{id}', 'CatController@update')->name('update-cat');

// delete cat
Route::delete('/cats/{id}', 'CatController@destroy')->name('delete-cat');







