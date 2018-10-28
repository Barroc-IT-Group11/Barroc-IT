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

//
//
//Route::get('/', function () {
//    return view('../auth/login');
//});
//
//Route::get('/schedule_appointment', function () {
//    return view('/development/development_schedule_appointment');
//});
//
//Route::get('/create_client', function () {
//    return view('/sales/sales_create_client');
//});
//
//Route::get('/create_project', function () {
//    return view('/sales/sales_create_project');
//});
//
//Route::get('/appointments', function () {
//    return view('/sales/sales_appointments');
//});
//
//
//
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Route::get('/finance', function () {
//    return view('/finance/finance_index');
//});
//Route::get('/create_invoice', function() {
//    return view('/finance/finance_create_invoice');
//});
//
//<<<<<<< HEAD
//*/


Route::get('/', function () {
    return view('../auth/login');
});

Route::get('/schedule_appointment', function () {
    return view('/development/development_schedule_appointment');
});

Route::get('/create_client', function () {
    return view('/sales/sales_create_client');
});

Route::get('/create_project', function () {
    return view('/sales/sales_create_project');
});

Route::get('/appointments', function () {
    return view('/sales/sales_appointments');
});




Route::get('/home', 'HomeController@index')->name('home');

Route::get('/finance', function () {
    return view('/finance/finance_index');
});
Route::get('/create_invoice', function() {
    return view('/finance/finance_create_invoice');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index');


/*  Finance pages  */
Route::group(['middleware' => ['web']], function(){
    Route::get('/', 'HomeController@index');
    Route::get('/finance', 'FinanceController@index')->middleware('CheckFinance');
    Route::get('/finance/create', 'FinanceController@create')->middleware('CheckFinance');
    Route::get('/finance/client', 'FinanceController@client');
    Route::get('/finance/overview', 'FinanceController@overview')->middleware('CheckFinance');

/*  Sales pages  */
    Route::get('/sales', 'SalesController@index')->middleware('CheckSales');
    Route::get('/sales/schedule_appointment', 'SalesController@schedule_appointment')->middleware('CheckSales');
    Route::get('/sales/client_information', 'SalesController@client_information')->middleware('CheckSales');
    Route::get('/sales/create_project', 'SalesController@create_project')->middleware('CheckSales');
    Route::get('/sales/appointments', 'SalesController@appointments')->middleware('CheckSales');
    Route::get('/sales/create_client', 'SalesController@create_client')->middleware('CheckSales');

    Route::post('/sales/store', 'PersonalDetailController@store')->name('store');

/*  Development pages  */

    Route::get('/development', 'DevelopmentController@index')->middleware('CheckDevelopment');
    Route::get('/finance/schedule-appointment', 'FinanceController@show')->middleware('CheckDevelopment');
    Route::get('/finance/client-information', 'FinanceController@show')->middleware('CheckDevelopment');
    Route::get('/finance/create-client', 'FinanceController@show')->middleware('CheckDevelopment');

/*  Admin check route */

    Route::get('/admin', 'AdminController@admin')
        ->middleware('is_admin')
        ->name('admin');
});


Auth::routes();
Route::get ( '/search', function () {
    $data = App\Data::all ();
    return view ( '/finance/finance_client_information' )->withData ( $data );
} );
