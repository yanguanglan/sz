<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

#index
Route::get('/', function()
{
	return View::make('hello');
});
#endindex

Route::group(array('prefix' => 'admin'), function()
{

#admin
Route::get('/login', function()
{
	return View::make('admin.login');
});

#借贷管理
#============================================#
#新增借贷
//Route::resource('borrows', 'BorrowsController');
//Route::get('api/borrows', array('as'=>'api.borrows', 'uses'=>'BorrowsController@getDatatable'));
#/借贷管理====================================#

#预录入
Route::get('itemreceive/modal', array('as'=>'itemreceive.modal', 'uses'=>'ItemReceiveController@getModal'));
Route::post('itemreceive/modal', array('as'=>'itemreceive.modal.post', 'uses'=>'ItemReceiveController@postModal'));
#分包录入
Route::get('itemreceive/packagemodal', array('as'=>'itemreceive.packagemodal', 'uses'=>'ItemReceiveController@getPackageModal'));
Route::post('itemreceive/packagemodal', array('as'=>'itemreceive.packagemodal.post', 'uses'=>'ItemReceiveController@postPackageModal'));
#拆包
Route::get('itemreceive/packagedetailmodal', array('as'=>'itemreceive.packagedetailmodal', 'uses'=>'ItemReceiveController@getPackageDetailModal'));
Route::post('itemreceive/packagedetailmodal', array('as'=>'itemreceive.packagedetailmodal.post', 'uses'=>'ItemReceiveController@postPackageDetailModal'));
#查看发货清单
Route::get('itemreceive/modaledit', array('as'=>'itemreceive.modaledit.post', 'uses'=>'ItemReceiveController@getModalEdit'));
Route::get('itemreceive/detail', array('as'=>'itemreceive.detail', 'uses'=>'ItemReceiveController@getDetail'));
Route::post('itemreceive/packageconfirm', array('as'=>'itemreceive.packageconfirm.post', 'uses'=>'ItemReceiveController@postPackageConfirm'));
Route::get('itemreceive/packagemodaledit', array('as'=>'itemreceive.packagemodaledit', 'uses'=>'ItemReceiveController@getPackageModalEdit'));
Route::post('itemreceive/packagemodaledit', array('as'=>'itemreceive.packagemodaledit.post', 'uses'=>'ItemReceiveController@postPackageModalEdit'));
Route::resource('itemreceive', 'ItemReceiveController');

Route::get('api/modaledit', array('as'=>'api.modaledit', 'uses'=>'ItemReceiveController@getDatatable'));

#test
Route::get('dashboard', function()
{
	return View::make('admin.dashboard');
});
#endadmin
});
