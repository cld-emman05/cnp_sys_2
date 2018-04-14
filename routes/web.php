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

// Customer

Route::get('/customer/register', 'CustomerController@create');
Route::get('/customer', 'CustomerController@index');
Route::post('/customer/store', 'CustomerController@store');

// Employees
Route::post('/employee/store', 'EmployeeController@store');
Route::get('/employee/register', 'EmployeeController@create');
Route::get('/employee', 'EmployeeController@index');
Route::get('/industries', 'IndustriesController@index');

// Suppliers
Route::get('/supplier/register', function () {
    return view('supplier.register');
});

Route::get('/supplier/', function () {
    return view('supplier.index');
});

Route::get('/profile/{id}', 'UsersController@edit');
Route::patch('/profile/update', 'UsersController@update');

// Orders Function

Route::get('/order', 'OrderController@index');
Route::get('/order/create', 'OrderController@create');
Route::post('/order/store', 'OrderController@store');
Route::post('/order/assign', 'OrderController@assignSpecs');
Route::get('/order/revise/{id}','OrderController@revise');
Route::get('/order/view/{id}', 'OrderController@show');
Route::get('/order/monitor-status/{id}', 'OrderController@monitor');
Route::post('/order/cancel/{id}', 'OrderController@destroy');
Route::get('/order/delivery/{id}', 'OrderController@delivery');
Route::get('/order/to-do/{id}', 'OrderController@todo');
Route::post('/order/update/{id}', 'OrderController@update');

//Quotations Function

Route::get('/quotation/create/{id}', 'QuotationController@create');
Route::post('/quotation/store/', 'QuotationController@store');
Route::get('/quotation/manage/', 'QuotationController@manage');
Route::get('/quotation/approve', 'QuotationController@approve');
Route::post('/quotation/confirmed/{id}', 'QuotationController@confirmed');
Route::post('/quotation/destroy/{id}', 'QuotationController@destroy');

Route::get('/quotation', 'QuotationController@index');

//Purchase Function

Route::get('/purchase/create', function () {
    return view('purchase.create');
});

Route::get('/purchase/compute', function () {
    return view('purchase.compute');
});

Route::get('/purchase', function(){
  return view('purchase.index');
});

// Supplier Functions

Route::get('/supplier/pay', function () {
    return view('supplier.pay');
});

Route::get('/supplier/track', function () {
    return view('supplier.track');
});

// About Functions
Route::get('/about-us', function () {
  return view('about.info');
});

Route::get('/', 'HomeController@index');

Route::get('/about-us#contact', function () {
    return view('about.contact');
});

Auth::routes();

Route::get('/register', [
  'as' => 'register',
  'uses' => 'IndustryController@index',
]);

// Resources

Route::resource('industries', 'IndustryController');
