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
#拆包检验
Route::get('itemreceive/packagechecked', array('as'=>'itemreceive.packagechecked', 'uses'=>'ItemReceiveController@getPackageChecked'));
Route::post('itemreceive/packagechecked', array('as'=>'itemreceive.packagechecked.post', 'uses'=>'ItemReceiveController@postPackageChecked'));
Route::get('itemreceive/packagecheckedin', array('as'=>'itemreceive.packagecheckedin', 'uses'=>'ItemReceiveController@getPackageCheckedin'));
Route::post('itemreceive/packagecheckedin', array('as'=>'itemreceive.packagecheckedin.post', 'uses'=>'ItemReceiveController@postPackageCheckedin'));
Route::get('itemreceive/packagecheckedprint', array('as'=>'itemreceive.packagecheckedprint', 'uses'=>'ItemReceiveController@getPackageCheckedPrint'));

Route::resource('itemreceive', 'ItemReceiveController');

Route::get('api/modaledit', array('as'=>'api.modaledit', 'uses'=>'ItemReceiveController@getDatatable'));
#仓库
#入库历史记录
Route::get('api/historywarehouse', array('as'=>'api.historywarehouse', 'uses'=>'WareHouseController@getDatatable'));
Route::get('warehouse/history', array('as'=>'warehouse.history', 'uses'=>'WareHouseController@getHistory'));
Route::get('warehouse/modal', array('as'=>'warehouse.modal', 'uses'=>'WareHouseController@getModal'));
Route::post('warehouse/modal', array('as'=>'warehouse.modal.post', 'uses'=>'WareHouseController@postModal'));
Route::resource('warehouse', 'WareHouseController');

#供应商
Route::resource('suppliers', 'SuppliersController');
Route::get('api/suppliers', array('as'=>'api.suppliers', 'uses'=>'SuppliersController@getDatatable'));

#客户
Route::resource('customers', 'CustomersController');
Route::get('api/customers', array('as'=>'api.customers', 'uses'=>'CustomersController@getDatatable'));

#货品
Route::resource('items', 'ItemsController');
Route::get('api/items', array('as'=>'api.items', 'uses'=>'ItemsController@getDatatable'));

#购物车
Route::get('carts/addcustomer', array('as'=>'carts.addcustomer', 'uses'=>'CartsController@getAddCustomer'));
Route::post('carts/addcustomer', array('as'=>'carts.addcustomer.post', 'uses'=>'CartsController@postAddCustomer'));
Route::get('carts/checkout', array('as'=>'carts.checkout', 'uses'=>'CartsController@getCheckout'));

Route::post('carts/mycart', array('as'=>'carts.mycart.post', 'uses'=>'CartsController@postMyCart'));
Route::post('carts/additem', array('as'=>'carts.additem.post', 'uses'=>'CartsController@postAddItem'));
Route::post('carts/removeitem', array('as'=>'carts.removeitem.post', 'uses'=>'CartsController@postRemoveItem'));
Route::post('carts/mycartedit', array('as'=>'carts.mycartedit.post', 'uses'=>'CartsController@postMyCartEdit'));
Route::get('carts/queryitem', array('as'=>'carts.queryitem', 'uses'=>'CartsController@getQueryItem'));
Route::post('carts/checkout', array('as'=>'carts.checkout.post', 'uses'=>'CartsController@postCheckOut'));

Route::resource('carts', 'CartsController');
Route::get('api/carts/customers', array('as'=>'api.carts.customers', 'uses'=>'CartsController@getDatatableCustomers'));
Route::get('api/carts', array('as'=>'api.carts', 'uses'=>'CartsController@getDatatable'));

#订单
Route::post('orders/payment', array('as'=>'orders.payment', 'uses'=>'OrdersController@postPayment'));
Route::post('orders/shipping', array('as'=>'orders.shipping', 'uses'=>'OrdersController@postShipping'));
Route::resource('orders', 'OrdersController');
Route::get('api/orders', array('as'=>'api.orders', 'uses'=>'OrdersController@getDatatable'));

#备货
Route::post('stockups/modal', array('as'=>'stockups.modal', 'uses'=>'StockupsController@postModal'));
Route::post('stockups/editmodal', array('as'=>'stockups.editmodal.post', 'uses'=>'StockupsController@postEditModal'));

Route::resource('stockups', 'StockupsController');
Route::get('api/stockuporders', array('as'=>'api.stockuporders', 'uses'=>'StockupsController@getDatatable'));

#打包
Route::post('stockuppackages/modal', array('as'=>'stockuppackages.modal', 'uses'=>'StockuppackagesController@postModal'));
Route::post('stockuppackages/editmodal', array('as'=>'stockuppackages.editmodal.post', 'uses'=>'StockuppackagesController@postEditModal'));
#打包发货
Route::resource('stockuppackages', 'StockuppackagesController');
Route::get('api/stockuppackageorders', array('as'=>'api.stockuppackageorders', 'uses'=>'StockuppackagesController@getDatatable'));

#部门
Route::resource('departments', 'DepartmentsController');
Route::get('api/departments', array('as'=>'api.departments', 'uses'=>'DepartmentsController@getDatatable'));
#员工
Route::resource('employees', 'EmployeesController');
Route::get('api/employees', array('as'=>'api.employees', 'uses'=>'EmployeesController@getDatatable'));

#test
Route::get('dashboard', function()
{
	return View::make('admin.dashboard');
});
#endadmin
});
