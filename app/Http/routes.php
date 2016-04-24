<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|-------------------------------------------------------------------------
|-
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('user/register', 'UserController@create');
Route::post('user/register', 'UserController@store');
Route::get('user/actions','UserController@actions');
// Route::get('/',function(){
// 	return "please go to <a href='general'>Click Here</a>";
// });
Route::get('logs','PageController@logs');
Route::get('/search','SearchController@show_search_page');
Route::post('/search','SearchController@search');
Route::get('/','AssetController@index');;
Route::get('add/asset','PageController@general');
Route::post('add/asset','AssetController@store_asset');
Route::get('all/assets',array('as'=>'all_asset','uses'=>'AssetController@all_asset'));
Route::get('all/maintenance','AssetController@all_maintenance');
Route::get('link/image','PageController@link_image');
Route::get('link/asset','PageController@link_asset');
Route::get('asset/maintenance/{id}','AssetController@show_maintenance');
Route::get('asset/delete/{id}','AssetController@delete_asset');
Route::get('asset/edit/{id}','AssetController@edit');
Route::post('asset/edit/{id}','AssetController@save_edit');
Route::get('maintenance/add/{id}','AssetController@show_add_maintenance');
Route::post('maintenance/adding','AssetController@add_maintenance');
Route::get("asset/view/{id}","AssetController@view_asset");

// Transactions
Route::get('transaction/all',"TransactionController@show_all");
Route::get('transaction/show/{id}',"TransactionController@show");
//show form
Route::get('transaction/new/{id}','TransactionController@index');
Route::post('transaction/new/{id}','TransactionController@store');
//del
Route::get('transaction/delete/{id}','TransactionController@destroy');
//update
Route::get('transaction/updated/{id}','TransactionController@edit');
Route::post('transaction/updated/{id}','TransactionController@update');

