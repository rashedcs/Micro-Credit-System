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

Route::get('/', function () 
{
    return view('welcome');
});

Auth::routes();

Route::group(['namespace' => 'User'],function()
{
    Route::get('/home',     'HomeController@index')->name('user.home');
    Route::get('/profile',  'HomeController@profile')->name('user.profile');

    Route::get('/request',  'LoanController@request')->name('user.request');
    Route::post('/request', 'LoanController@reqstore');

    Route::get('/loanstatus',  'LoanController@loanstatus')->name('user.loanstatus');

    Route::get('/recharge',  'RechargeController@request')->name('user.recharge');
    Route::post('/recharge', 'RechargeController@reqstore');

    Route::get('/account',  'AccountController@accountstatus')->name('user.account');
    Route::post('/account', 'AccountController@reqstore');

    Route::get('/deposite',  'DepositeController@request')->name('user.deposite');
    Route::post('/deposite', 'DepositeController@store');

});
   


Route::group(['namespace' => 'Admin'],function()
{
	Route::get('admin/home','HomeController@index')->name('admin.home');
	
	Route::get('wp-admin', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('wp-admin', 'Auth\LoginController@login');
	 
	Route::get('admin/profile', 'HomeController@profile')->name('admin.profile');
	
    Route::get('admin/register', 'AdminController@create')->name('admin.register');
    Route::post('admin/register', 'AdminController@store');
    
    Route::get('admin/user', 'UserController@create')->name('admin.user');
    Route::post('admin/user','UserController@store');

    Route::get('admin/loanstatus',  'RequestController@loanstatus')->name('admin.loanstatus');
    Route::post('admin/loanstatus',  'RequestController@store');

});


Route::group(['namespace' => 'Super'],function()
{
    Route::get('super/home','HomeController@index')->name('super.home');
    
    Route::get('super', 'Auth\LoginController@showLoginForm')->name('super.login');
    Route::post('super', 'Auth\LoginController@login');
     
    Route::get('super/profile', 'HomeController@profile')->name('super.profile');

    Route::get('super/branch', 'BranchController@create')->name('super.branch');
    Route::post('super/branch','BranchController@store');

    Route::get('super/register', 'AdminController@create')->name('super.register');
    Route::post('super/register', 'AdminController@store');

    Route::get('super/recharge', 'RechargeController@create')->name('super.recharge');
    Route::post('super/recharge', 'RechargeController@store');

    Route::get('super/loanstatus',  'LoanController@loanstatus')->name('super.loanstatus');
    Route::post('super/loanstatus',  'LoanController@store');

});
