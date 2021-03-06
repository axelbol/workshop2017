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
//Route::get('/', function () {    return view('welcome');});

//CATALOG
Route::get('/catalog', 'CatalogController@index');
Route::get('/catalog/dataTable', 'CatalogController@indexDataTable');

//LOGIN CESAR
//Route::get('/create_account', 'PersonalAccountController@create');
//Route::get('/login_cesar', 'PersonalAccountController@login');
//Route::post('/create_account', 'PersonalAccountController@store');
//Route::post('/authenticate', 'PersonalAccountController@authenticate');

//PRODUCT
Route::get('product/productData', 'ProductController@productData');

Route::resource('product', 'ProductController');

//WORKING LOGIN
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');

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
Route::get('/viewuser', 'AdminController@view');
Route::get('/get_datatable', 'AdminController@get_dataTable');
//EMPLOYEE
Route::prefix('employee')->group(function() {
    Route::get('/login', 'Auth\EmployeeLoginController@showLoginForm')->name('employee.login');
    Route::post('/login', 'Auth\EmployeeLoginController@login')->name('employee.login.submit');
    Route::get('/', 'EmployeeController@index')->name('employee.dashboard');
    Route::get('/logout', 'Auth\EmployeeLoginController@logout')->name('employee.logout');
});

Route::view('/example', 'product.create');

//SELLER
Route::get('/viewseller', 'SellerController@view')->name('viewseller');
Route::get('/get_datatableSeller', 'SellerController@get_dataTableSeller');

//Route::get('/seller', 'SellerController@index');
//Route::post('/selleradd', 'SellerController@store');

//Route::resource('/selleredit/{id}', 'SellerController@edit');
Route::get('/{id}/pdfSeller', 'SellerController@pdfSeller')->name('pdf.seller');
//Route::get('/{id}', 'SellerController@edit');
//Route::put('/updateseller/{id}', 'Sellercontroller@update')->name('seller.update');

Route::get('/{id}/destroy', 'SellerController@destroy')->name('seller.destroy');
Route::resource('seller', 'SellerController');
//Axel principal view
Route::get('/principalView', 'ProductController@principalView')->name('principal.view');
Route::get('/addtocartAxel/{id}', 'ProductController@addtocartAxel')->name('productAxel.addtocart');

//TRIAL PRODUCT
Route::get('/productTrial', 'ProductTrialController@index')->name('trial.index');
Route::get('/addtocart/{id}', 'ProductTrialController@addtocart')->name('product.addtocart');
Route::get('/reduce/{id}', 'ProductTrialController@getReduceByOne')->name('product.reduceByOne');
Route::get('/remove/{id}', 'ProductTrialController@getRemoveItem')->name('product.remove');
Route::get('/shoppingcart', 'ProductTrialController@shoppingcart')->name('product.shoppingcart');
Route::get('productTrialCreate', 'ProductTrialController@create')->name('trial.create');
Route::post('productTrial/store', 'ProductTrialController@store')->name('trial.store');

Route::post('/savecart', 'ProductTrialController@save')->name('product.save');
//DataTable Cart
Route::get('/viewcart', 'ProductTrialController@view')->name('viewcart');
Route::get('/get_datatableCart', 'ProductTrialController@get_dataTableCart');
//PDF CART
Route::get('/{id}/pdf', 'ProductTrialController@pdf')->name('pdf');
//UNDONE
Route::get('/profile', 'ProductTrialController@profile')->name('profile');

//INVOICE
Route::get('/invoice', 'InvoiceController@index');
Route::get('/invoice_add', 'InvoiceController@add');
Route::get('/invoice/detail/{id}', 'InvoiceController@detail');
Route::get('/pdf/{id}', 'InvoiceController@pdf')->name('pdf');
Route::get('/invoice/findClient', 'InvoiceController@findClient');
Route::get('/invoice/findProduct', 'InvoiceController@findProduct');
Route::post('/invoice/save', 'InvoiceController@save');