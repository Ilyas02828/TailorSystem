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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

	Route::resource('dashboards','DashboardController');
	Route::resource('customers','CustomerController');
	Route::resource('orders','OrderController');
	Route::resource('salaries','SalaryController');
  Route::resource('salarypercentage','SalaryPercentageController');
	Route::resource('staffs','StaffController');
	Route::resource('measurements','MeasurementController');

  Route::resource('style','StyleController');
     Route::resource('customerprint','CustomerPrintController');


  Route::resource('waskat','WaskatController');
  Route::resource('measur_waskat','MeasurController');
  Route::resource('coat','CoatController');
  Route::resource('measur_coat','CoatMeasureController');
  Route::resource('pant','PantController');
  Route::resource('measur_pant','PantMeasureController');
  Route::resource('shirt','ShirtController');
  Route::resource('measur_shirt','ShirtMeasureController');
  Route::get('allorders', 'allorderController@index');
   Route::get('ordergo', 'OrderController@create');
//   Route::get('ordershow', 'OrderController@show');


  // Route::get('update_waskat','MeasurController@update_waskat');

  	// Route::get('waskat', 'MeasurController@waskat');
  	Route::get('coatold', 'MeasurController@coat');
  	Route::get('pantold', 'MeasurController@paint');
  	Route::get('shirtold', 'MeasurController@shirt');




	Route::get('/', 'DashboardController@index');

	Route::get('logout', function (){
        Auth::logout();
        return redirect('/');
    });

    Route::get('password', 'OrderController@password');
	Route::post('password', 'OrderController@updatePassword');

});
