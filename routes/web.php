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
Route::get('/a', function () {
    return view('layouts.masterDashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>'web'],function (){
	Route::auth();
});
Route::group(['middleware' => ['web','auth']],function (){
	//Route::get('/home','HomeController@index');
	Route::get('/home',function(){
		if(Auth::user()->type=="Admin"){
			return view('admins.adminHome');
		} else {
			return view('users.userHome');
		}
	});
});

Route::prefix('admin')->group(function() {
Route::get('/',['middleware' => ['admin'],function (){
	return view('admins.adminHome');
}]);
Route::resource('managemenus', 'ManageMenuController');
Route::get('carimenu','ManageMenuController@search');
Route::resource('managespecials', 'ManageMenuController');
Route::resource('managetables', 'ManageTableController');
Route::get('caritable','ManageTableController@search');
Route::resource('manageorders', 'ManageOrderController');
Route::resource('morder','MOrderController');
Route::get('cariorder','ManageOrderController@search');
Route::get('cariorder2','ManageOrderController@search2');
Route::resource('manageordertotals', 'ManageOrderTotalController');
Route::resource('manageresers', 'ManageReservationController');
Route::get('carireser','ManageReservationController@search');
Route::resource('manageusers', 'ManageUserController');
Route::get('cariser','ManageUserController@search');
});

Route::prefix('user')->group(function() {
Route::get('/',['middleware' => ['user'],function (){
	return view('users.userHome');
}]);
Route::resource('order', 'OrderController');

});