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

<<<<<<< HEAD
//LOGIN CESAR
//Route::get('/create_account', 'PersonalAccountController@create');
//Route::get('/login_cesar', 'PersonalAccountController@login');
//Route::post('/create_account', 'PersonalAccountController@store');
//Route::post('/authenticate', 'PersonalAccountController@authenticate');

//PRODUCT
=======
Route::get('/catalogs', 'PersonalAccountController@create');

Route::get('/login', 'PersonalAccountController@login');

>>>>>>> 076607cd3a509669469452d438d3e608c76e8849
Route::get('/create_product', 'ProductController@create');

Route::post('/store_product', 'ProductController@store');

<<<<<<< HEAD
//WORKING LOGIN
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\AdminLoginController@userLogout')->name('user.logout');

//En proceso
Route::get('edit_user', 'HomeController@edit_user')->name('edit.user');

//ADMIN
//Route::prefix('admin')->group(function() {
//    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//    Route::get('/', 'AdminController@index')->name('admin.dashboard');
//    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

   // Route::get('/view', 'AdminController@view');
//});

Route::get('/admin', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login_admin_submit', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin_dashboard', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin_logout', 'Auth\AdminLoginController@logout')->name('admin.logout');


//list account
//I don't know why it doesn`t work inside group route->admin
Route::get('/view', 'AdminController@view');
Route::get('/get_datatable', 'AdminController@get_dataTable');
//EMPLOYEE
Route::prefix('employee')->group(function() {
    Route::get('/login', 'Auth\EmployeeLoginController@showLoginForm')->name('employee.login');
    Route::post('/login', 'Auth\EmployeeLoginController@login')->name('employee.login.submit');
    Route::get('/', 'EmployeeController@index')->name('employee.dashboard');
    Route::get('/logout', 'Auth\EmployeeLoginController@logout')->name('employee.logout');
});
=======
Route::post('/create_account', 'PersonalAccountController@store');

Route::post('/authenticate', 'PersonalAccountController@authenticate');

Route::get('/example', 'ProductController@getIndex');

Route::get('/index/datatable', 'ProductController@anyData')->name('datatables.data');

Route::view('/bootstrap', 'try.layout.main');

Route::view('/create', 'try.product.create');

Route::get('/index', 'ProductController@getIndex');

Route::get('/indexpro', 'ProductController@indexpro');

Route::get('/indexpro/dataTable', 'ProductController@indexDataTable')->name('datatable');
>>>>>>> 076607cd3a509669469452d438d3e608c76e8849
