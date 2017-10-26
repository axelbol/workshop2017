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

Route::get('/product', 'ProductController@index');

Route::get('/catalog/dataTable', 'CatalogController@indexDataTable');

Route::get('/catalogs', 'PersonalAccountController@create');

Route::get('/login', 'PersonalAccountController@login');

Route::get('/create_product', 'ProductController@create');

Route::post('/store_product', 'ProductController@store');

Route::post('/create_account', 'PersonalAccountController@store');

Route::post('/authenticate', 'PersonalAccountController@authenticate');

Route::get('/example', 'ProductController@getIndex');

Route::get('example/datatable', 'ProductController@anyData')->name('datatables.data');

Route::view('/bootstrap', 'try.layout.main');

Route::view('/create', 'try.product.create');