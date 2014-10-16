<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

function get_order_status($name)
{
	$array = array(
		'order_created' => '<span class="label label-danger">待确认价格</span>',
		'order_price_confirmed' => '<span class="label label-danger">待备货</span>',
		'order_stockuped' => '<span class="label label-danger">待确认订单</span>',
		'order_confirmed' => '<span class="label label-warning">待付款</span>',
		'order_payed' => '<span class="label label-warning">待确认收款</span>',
		'order_pay_confirmed' => '<span class="label label-warning">待发货</span>',
		'order_shipped' => '<span class="label label-success">已发货</span>',
		'order_finished' => '<span class="label label-default">订单完成</span>',
		'order_canceled' => '<span class="label label-default">取消关闭</span>',
		'order_part_shipped' => '<span class="label label-success">部分已发货</span>',
		'order_unfinished' => '<span class="label label-danger">未完成订单</span>',
		'order_returned' => '<span class="label label-info">退款中</span>',
		'order_received' => '<span class="label label-info">退款已收货</span>',
		'order_return_payed' => '<span class="label label-default">退款完成</span>'
	);

	return $array[$name];
}
