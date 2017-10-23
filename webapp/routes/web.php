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
//CATALOG
Route::get('/catalog', 'CatalogController@index');
Route::get('/catalog/dataTable', 'CatalogController@indexDataTable');
//LOGIN CESAR
Route::get('/create_account', 'PersonalAccountController@create');
Route::get('/login_cesar', 'PersonalAccountController@login');
Route::post('/create_account', 'PersonalAccountController@store');
Route::post('/authenticate', 'PersonalAccountController@authenticate');
//PRODUCT
Route::get('/create_product', 'ProductController@create');
Route::get('/product', 'ProductController@index');
Route::post('/store_product', 'ProductController@store');
//WORKING LOGIN
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('home');
Route::get('/employee', 'EmployeeController@index')->name('home');