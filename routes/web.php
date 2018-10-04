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

// Start Backend
/*Route::group(['prefix' => 'admin'], function () {	
	Route::group(['namespace' => 'admin'], function () {

		Route::group(['namespace' => 'Auth'], function () {
			Route::get('/login', 'LoginController@showLoginForm');
			Route::post('/login', 'LoginController@login')->name('adminLogin');
			Route::get('/logout', 'LoginController@logout')->name('adminLogout');
			Route::get('/bycript', 'LoginController@bycript');
		});

		Route::post('inputDataFromRaspberry', 'AutoInputDataController@getDataFromRaspberry');

	Route::group(['middleware' => 'auth'], function () { 
		Route::get('/', 'HomeController@index')->name('home');
		Route::get('/home', 'HomeController@index')->name('home');
		Route::resource('station', 'StationController');
		Route::resource('station_pic', 'StationPicController');
		Route::resource('member', 'MemberController');
		Route::resource('chat', 'ChatController');
		Route::resource('setting/Globall', 'GloballSettingController');
		Route::resource('setting/Home', 'HomeSettingController');
		Route::resource('setting/Logo', 'LogoSettingController'); 

		Route::get('/data', 'DataController@index');

		Route::get('/create/station', 'StationController@create');
		Route::get('/create/station/pic', 'StationPicController@create');
		Route::get('/create/member', 'MemberController@create');
		Route::get('/read/message/{id}', 'ChatController@create')->name('admin.read.message');	
		});
	});
});
// EndBackend

// Start Frontend

	Route::group(['namespace' => 'frontend'], function () {
		Route::get('/', function() { 
			if(Session::has("nama_login")==false)
				{
					return Redirect::to("login");
				}
				else
				{
					$arraylink=array('login','registrasi');
					return Redirect::to("home");		
				}
			 });
		Route::get('login', 'MainController@login');
		Route::post('ceklogin', 'MainController@ceklogin');
		Route::get('registrasi', 'MainController@registrasi');


		Route::post('proses-register', 'MainController@registrasiproses');
		Route::group(['middleware' => 'My-Middleware'], function () { 

			Route::get('home', 'MainController@home');
			Route::get('log-out', 'MainController@logout');
			Route::get('profile', function() { return view('user.home.profiles'); });
			Route::get('listicon', function() { return view('user.other.listicon'); });
			Route::post('simpanprofile', 'MainController@simpanprofile');


			Route::get('listchat', 'ToolsController@listchat');	
			Route::get('sendchat', 'ToolsController@sendchat');	

			
		});

	});*/
Route::group(['namespace' => 'soalmarlin'], function () {

			Route::get('/', 'SoalMarlinController@soal2');

	});
// EndFrontend