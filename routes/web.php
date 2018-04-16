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

Route::get('/home', 'HomeController@index')->name('home');

//User

Route::get('/user/admin', 'UserController@index');
Route::get('/user/show/{id}', 'UserController@show');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::post('/user/edit/{id}', 'UserController@update');
Route::get('/user/delete/{id}', 'UserController@destroy');
Route::get('/user/create', 'UserController@create');
Route::post('/user/create', 'UserController@store');

//Offer

Route::get('/offers/admin', 'OffersController@index');
Route::get('/offers/show/{id}', 'OffersController@show');
Route::get('/offers/edit/{id}', 'OffersController@edit');
Route::post('/offers/edit/{id}', 'OffersController@update');
Route::get('/offers/delete/{id}', 'OffersController@destroy');
Route::get('/offers/create', 'OffersController@create');
Route::post('/offers/create', 'OffersController@store');

//Category

Route::get('/category/admin', 'CategoryController@index');
Route::get('/category/show/{id}', 'CategoryController@show');
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::post('/category/edit/{id}', 'CategoryController@update');
Route::get('/category/delete/{id}', 'CategoryController@destroy');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/create', 'CategoryController@store');


//items

Route::get('/items/admin', 'ItemsController@index');
Route::get('/items/show/{id}', 'ItemsController@show');
Route::get('/items/edit/{id}', 'ItemsController@edit');
Route::post('/items/edit/{id}', 'ItemsController@update');
Route::get('/items/delete/{id}', 'ItemsController@destroy');
Route::get('/items/create', 'ItemsController@create');
Route::post('/items/create', 'ItemsController@store');

//sub item

Route::get('/subItem/create/{id}', 'SubItemController@create');
Route::post('/subItem/create', 'SubItemController@store');
Route::get('/subItem/edit/{id}', 'SubItemController@edit');
Route::post('/subItem/edit/{id}', 'SubItemController@update');
Route::get('/subItem/delete/{id}', 'SubItemController@destroy');
