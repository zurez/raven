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
Route::get('/',function(){
	return "please go to <a href='general'>Click Here</a>";
});
// Route::get('/','PageController@dashboard');;
Route::get('general','PageController@general');
Route::post('general','AssetController@store_asset');
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