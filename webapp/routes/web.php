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

Route::get('/catalog', 'CatalogController@index');

Route::get('/catalog/dataTable', 'CatalogController@indexDataTable');


Route::get('/product', 'ProductController@index');

Route::get('/create_product', 'ProductController@create');

Route::post('/store_product', 'ProductController@store');


Route::get('/create_personal_account', 'PersonalAccountController@create');

Route::get('/login', 'PersonalAccountController@login');

Route::post('/save_account', 'PersonalAccountController@store');

Route::post('/authenticate', 'PersonalAccountController@authenticate');

Route::get('/list_account', 'PersonalAccountController@index');

Route::get('/destroy_account/{id}', 'PersonalAccountController@destroy');