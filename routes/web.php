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
			return view('userHome');
		}
	});
});

Route::prefix('admin')->group(function() {
Route::get('/',['middleware' => ['admin'],function (){
	return view('admins.adminHome');
}]);
Route::resource('managemenus', 'ManageMenuController');
Route::resource('managetables', 'ManageTableController');
});
