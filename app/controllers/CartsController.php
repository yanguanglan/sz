<?php

class CartsController extends \BaseController {
	/**
	 * postCheckOut
	 */
	public function postCheckOut()
	{
		$customer = Input::get('customer');
		$customer = Customer::find($customer);
		$customer_address = CustomerReceivedAddress::where('customer_id', $customer->id)
		                                           ->where('default', 1)
		                                           ->first();
		//订单编号
			$orderno = OrderGeneration::where('customer_no', $customer->customer_no)
										->where('used', 0)
			                            ->first();
			if(!$orderno) {
				foreach(range(1001, 9998) as $index)
				{	
					if($index == 1111 ||
					   $index == 2222 ||
					   $index == 3333 ||
					   $index == 4444 ||
					   $index == 5555 ||
					   $index == 6666 ||
					   $index == 7777 ||
					   $index == 8888
					){
						continue;
					}

					OrderGeneration::create([
						'customer_no' => $customer->customer_no,
						'order_no'=> $index,
						'used' => 0,
					]);
				}
				$order_no = $index;
				$no = $order_no.$customer->customer_no;
			} else {
				$order_no = $orderno->order_no;
				$no = $order_no.$customer->customer_no;
			}

		$order = new Order;
		$order->no = $no;
		$order->customer_id = $customer->id;
		$order->customer_address_id = $customer_address->id;
		$order->payment_method_id = 1;
		$order->shipping_method_id = 1;
		$order->order_status = 'order_price_confirmed';
		$order->item_fee = 0.00;
		$order->shipping_fee = 0;
		$order->amount_fee = 0.00;
		$order->point_fee = 0;
		$order->credit_fee = 0;
		$order->pay_fee = 0.00;
		$order->caution_money = 0;
		$order->save();

		$ordergeneration = OrderGeneration::where('order_no', $order_no)
		                                  ->where('customer_no', $customer->customer_no)
		                                  ->first();
		$ordergeneration->used = 1;
		$ordergeneration->save();

		//orderdetail
		$carts = Cart::where('customer_id', $customer->id)->get();
		$sum = 0;
		foreach($carts as $cart)
		{
			$total = 0;
			if($cart->confirm_price == 0.00)
			{
				$cart->confirm_price = $cart->item->price_market;
			}

			OrderDetail::create([
						'order_id' => $order->id,
						'item_id' => $cart->item_id, 
						'craft_description' => $cart->craft_description,
						'quantity' => $cart->quantity,
						'confirm_price' => $cart->confirm_price,
						'confirm_quantity'=>0,
						'delivery_quantity'=>0
					]);
			$total = $cart->confirm_price * $cart->quantity;
			$sum += $total;
		}

		$order = Order::find($order->id);
		$order->item_fee = $sum;
		$order->save();


		//查看订单详细页面
		return Redirect::to('admin/orders');
	}

	/**
	 * getQueryItem
	 */
	public function getQueryItem()
	{
		$code = Input::get('code');
		$items = Item::select(array('id', 'code'))->where('code', 'LIKE', '%'.$code.'%')->get();
		/*$data = array();
		foreach ( $items as $item ):
                $data[] = $item->code;
        endforeach;*/
		return Response::json($items->toArray());
	}

	/**
	 * postMyCartEdit
	 */
	public function postMyCartEdit()
	{
		$id = Input::get('id');
		$key = Input::get('key');
		$value = Input::get('value');
		$cart = Cart::find($id);
		$cart->{$key} = $value;
		$cart->save();
		return Response::json(array('msg'=>1));

	}

	/**
	 * postMyCart
	 */
	public function postMyCart()
	{ 
		$customer_id = Input::get('customer_id');
		$mycart = Cart::where('customer_id', $customer_id)->get();
		return View::make("admin.carts.mycart")->with('mycart', $mycart)->with('customer_id', $customer_id);
	}

	/**
	 * postRemoveItem
	 */
	public function postRemoveItem()
	{
		Cart::destroy(Input::get('id'));
		return Response::json(array('msg'=>1));
	}

	/**
	 * postAddItem
	 */
	public function postAddItem()
	{
		$item_id = Input::get('item_id');
		$customer_id = Input::get('customer_id');
		
		$cart = new Cart;
		$cart->customer_id = $customer_id;
		$cart->item_id = $item_id;
		$cart->quantity = 1;
		$cart->type = 0;
		$cart->craft_description = '';
		$cart->confirm_price = 0.00;
		$cart->save();

		return Response::json(array('msg'=>1));
	}

	/**
	 * getAddCustomer
	 */
	public function getAddCustomer()
	{
		return View::make("admin.carts.modaladdcustomer");
	}

	/**
	 * postAddCustomer
	 */
	public function postAddCustomer()
	{
		$validator = Validator::make($data = Input::all(), Customer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$customer_no = CustomerGeneration::where('used', 0)
		                                       ->orderBy(DB::raw('RAND()'))
		                                       ->first();

		$data['username'] = '';
		$data['password'] = '';
		$data['short_name'] = '';
		$data['customer_no'] = $customer_no->customer_no;
		$data['qq'] = '';
		$data['wechat'] = '';
		$data['telephone'] = '';
		$data['url'] = '';
		$data['mail'] = '';
		$data['group_id'] = 0;
		$data['street'] = '';
		$data['postcode'] = '';
		$data['business'] = '';

		$customer = Customer::create($data);

		$customergeneration = CustomerGeneration::find($customer_no->id);
		$customergeneration->used = 1;
		$customergeneration->save();

		CustomerReceivedAddress::create([
				'customer_id' => $customer->id,
				'name' => $customer->name,
				'mobile' => $customer->mobile,
				'province' => 0,
				'city' => 0,
				'district' => 0,
				'street' => '',
				'address'=> $customer->address,
				'postcode'=>'',
				'default'=>1
			]);

		return Redirect::to('admin/carts/');
	}

	/**
	 * getDatatableCustomers
	 */
	public function getDatatableCustomers()
	{
		$collection = Customer::all();
    		return Datatable::collection($collection)
        ->showColumns('name', 'mobile', 'address')
        ->searchColumns('name', 'mobile', 'wechat')
        ->addColumn('actions', function($model) {
          return $str = '<button data-customerid="'.$model->id.'"  class="btn btn-info btn_cart">查看购物车</button>';
        })
        ->make();
	}

	/**
	 * checkout
	 */
	public function getCheckout()
	{
		return View::make('admin.carts.checkout');
	}

	/**
	 * Display a listing of carts
	 *
	 * @return Response
	 */
	public function index()
	{

		//$carts = Cart::all();

		return View::make('admin.carts.index');
	}

	/**
	 * Show the form for creating a new cart
	 *
	 * @return Response
	 */
	public function create()
	{
		$customer_id = Input::get('customer_id');

		$customer = Customer::find($customer_id);

		$cart = Cart::where('customer_id', $customer_id)->get();

		return View::make('admin.carts.create')->with('customer', $customer)->with('cart', $cart);
	}

	/**
	 * Store a newly created cart in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Cart::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Cart::create($data);

		return Redirect::route('admin.carts.index');
	}

	/**
	 * Display the specified cart.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$cart = Cart::findOrFail($id);

		return View::make('admin.carts.show', compact('cart'));
	}

	/**
	 * Show the form for editing the specified cart.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cart = Cart::find($id);

		return View::make('admin.carts.edit', compact('cart'));
	}

	/**
	 * Update the specified cart in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$cart = Cart::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Cart::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$cart->update($data);

		return Redirect::route('admin.carts.index');
	}

	/**
	 * Remove the specified cart from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Cart::destroy($id);

		return Redirect::route('admin.carts.index');
	}

}
