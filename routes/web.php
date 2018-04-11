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

// Custome

Route::get('/customer/register', 'CustomerController@create');
Route::get('/customer', 'CustomerController@index');
Route::post('/customer/store', 'CustomerController@store');

// Employees
Route::post('/employee/store', 'EmployeeController@store');
Route::get('/employee/register', 'EmployeeController@create');
Route::get('/employee', 'EmployeeController@index');

// Suppliers
Route::get('/supplier/register', function () {
    return view('supplier.register');
});

Route::get('/supplier/', function () {
    return view('supplier.index');
});

Route::get('/profile', function(){
  return view('profile');
});

// Orders Function

Route::get('/order', 'OrderController@index');
Route::get('/order/create', 'OrderController@create');
Route::post('/order/store', 'OrderController@store');
Route::post('/order/assign', 'OrderController@assignSpecs');

Route::get('/order/revise','UploadFileController@index');

Route::get('/order/view', function () {
    return view('order.view');
});

Route::get('/order/to-do', function () {
    return view('order.to-do');
});

Route::get('/order/revise', function () {
    return view('order.revise');
});

Route::get('/order/monitor-status', function () {
    return view('order.monitor-status');
});

Route::get('/order/update-status', function () {
    return view('order.update-status');
});

Route::get('/order/schedule', function () {
    return view('order.schedule');
});

//Quotations Function

Route::get('/quotation/create', function () {
    return view('quotation.create');
});

Route::get('/quotation/approve', function () {
    return view('quotation.approve');
});

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
