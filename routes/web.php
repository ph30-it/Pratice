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

Route::get('/breeds', 'BreedController@index')->name('list-breeds');
Route::get('/breeds/create', 'BreedController@create')->name('create-breeds');
Route::post('/breeds', 'BreedController@store')->name('breeds-store');
Route::get('cats/create', 'CatController@create')->name('create-cats');
Route::post('cats', 'CatController@store')->name('cats-store');

Route::get('/cats/{id}', 'CatController@show')->name('cats-show');
Route::get('/breeds/{id}/list-cats', 'BreedController@listAllCatByBreedId');
Route::get('/users', 'UserController@index');
Route::get('/users/{id}/list-order-item', 'UserController@listOrderItem');
Route::get('/users/set-role', 'UserController@setRoles');
Route::resource('products', 'ProductController');