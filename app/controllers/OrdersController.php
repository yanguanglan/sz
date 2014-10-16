<?php

class OrdersController extends \BaseController {
	/**
	 * postPayment
	 */
	public function postPayment()
	{
		$data = Input::all();

		//$data['paydate'] = strtotime($data['paydate']);
		//插入payments
		$payment = OrderPayment::create($data);
		
		$payments = OrderPayment::where('order_id', Input::get('order_id'))->get();

		return View::make('admin.orders.payment')->with('payments', $payments);

	}
	
	/**
	 * postShipping
	 */
	public function postShipping()
	{
		$data = Input::all();

		//$data['paydate'] = strtotime($data['paydate']);
		//插入payments
		$shipping = OrderShipping::create($data);
		
		$shippings = OrderShipping::where('order_id', Input::get('order_id'))->get();

		return View::make('admin.orders.shipping')->with('shippings', $shippings);

	}

	/**
	 * getDatatable
	 */
	public function getDatatable()
	{
		$collection = Order::all();
    		return Datatable::collection($collection)
        ->showColumns('date', 'no', 'customer', 'status', 'item_fee', 'caution_money', 'point_fee', 'credit_fee', 'pay_fee', 'amount_fee', 'remain_fee')
        ->orderColumns('date', 'customer', 'status')
        ->searchColumns('date', 'no', 'customer', 'status')
        ->addColumn('date',function($model)
        {
            return date('Y-m-d', strtotime($model->created_at));
        })
         ->addColumn('customer',function($model)
        {
            return $model->customer->name;
        })
        ->addColumn('status',function($model)
        {
            return get_order_status($model->order_status);
        })
        ->addColumn('remain_fee',function($model)
        {
        	return $model->item_fee-$model->amount_fee-$model->point_fee-$model->credit_fee;
        })
        ->addColumn('actions', function($model) {
          return $str = '<button data-id="'.$model->id.'" class="btn btn-info btn-order">查看订单</button>';
        })
        ->make();
	}

	/**
	 * Display a listing of orders
	 *
	 * @return Response
	 */
	public function index()
	{
		$orders = Order::all();

		return View::make('admin.orders.index', compact('orders'));
	}

	/**
	 * Show the form for creating a new order
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.orders.create');
	}

	/**
	 * Store a newly created order in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Order::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Order::create($data);

		return Redirect::route('admin.orders.index');
	}

	/**
	 * Display the specified order.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$order = Order::findOrFail($id);

		return View::make('admin.orders.show', compact('order'));
	}

	/**
	 * Show the form for editing the specified order.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$order = Order::find($id);

		return View::make('admin.orders.edit', compact('order'));
	}

	/**
	 * Update the specified order in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$order = Order::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Order::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$order->update($data);

		return Redirect::route('admin.orders.index');
	}

	/**
	 * Remove the specified order from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Order::destroy($id);

		return Redirect::route('admin.orders.index');
	}

}
