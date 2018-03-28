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
Route::get('/customer/register', function () {
    return view('customer.register');
  });

Route::get('/customer', function(){
  return view('customer.index');
});

// Employees
Route::get('/employee/register', function () {
    return view('employee.register');
});

Route::get('/employee', function(){
  return view('employee.index');
});

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
Route::get('/order', 'OrderController@index')->middleware('auth');

Route::get('/order/create', 'OrderController@create')->middleware('auth');;

Route::post('/uploadfile','UploadFileController@showUploadFile');

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

Route::get('/quotation', function () {
    return view('quotation.index');
});

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

/*Route::get('/contact-us', function () {
    return view('about.contact');
});*/

Auth::routes();

// Resources

Route::resource('job_orders', 'Job_Orders');
