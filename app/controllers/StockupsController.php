<?php

class StockupsController extends \BaseController {
	/**
	 * postEditModal
	 */
	public function postEditModal()
	{
		$stockup = Input::get('stockup');
		$stockup = json_decode($stockup, true);

		$order_id = Input::get('order_id');
		$order = Order::find(Input::get('order_id'));
		//添加表
		$stock = new Stockup;
		$stock->order_id = $order_id;
		$stock->stockup_count = 0;
		$stock->item_count = 0;
		$stock->amount = 0.00;
		$stock->operator = '5';
		$stock->auditors = '4';
		$stock->save();
		//添加细表

		$stockup_count = $item_count = $amount = 0;
		foreach($order->orderdetails as $orderdetail){
			$confirm_quantity = 0;
			$ready_stock = $real_stock = 0;
			if($stockup[$orderdetail->item->code]['stockup']) {
				foreach ($stockup[$orderdetail->item->code]['stockup'] as $value) {
					//库存 有位置 identity status
					if(isset($value['position']) && !empty($value['position'])){
						$stockdetail = new StockupDetail;
						$stockdetail->stockup_id = $stock->id;
						$stockdetail->identity = isset($value['item'])?$value['item']:'';
						$stockdetail->supplier_id = 0;
						$stockdetail->item_id = $orderdetail->item->id;
						$stockdetail->quantity = $value['quantity'];
						$stockdetail->position = $value['position'];
						$stockdetail->status = 2;
						$stockdetail->packaged = 0;
						$stockdetail->save();
						//位置减库存
						$real_stock += $value['quantity'];
						//预录入状态更新
						if(isset($value['item'])) {
							$item_detail = ItemReceivedPackageDetail::find($value['item']);
							$item_detail->status = 3;
							$item_detail->save();
						} 
						//位置库存
						$item_position = Warehouse::find($value['position']);
						$item_position->quantity -= $value['quantity'];
						$item_position->save();

					} else {
					//预录入 没有位置	
						$stockdetail = new StockupDetail;
						$stockdetail->stockup_id = $stock->id;
						$stockdetail->identity = $value['item'];
						$stockdetail->supplier_id = '';
						$stockdetail->item_id = $orderdetail->item->id;
						$stockdetail->quantity = $value['quantity'];
						$stockdetail->position = '';
						$stockdetail->status = 1;
						$stockdetail->packaged = 0;
						$stockdetail->save();
						$ready_stock += $value['quantity'];
						//预录入状态更新
						$item_detail = ItemReceivedPackageDetail::find($value['item']);
						$item_detail->status = 3;
						$item_detail->save();
					}
					$item_count++;
					$stockup_count += $value['quantity'];
					$confirm_quantity += $value['quantity'];
					$amount += ($value['quantity'] * $orderdetail->confirm_price);
				    
				    //减状态
				    //减少库存
				}
			}
			//减少库存总数
			$item = Item::find($orderdetail->item->id);
			$item->stock -= $real_stock;
			$item->readystock -= $ready_stock;
			$item->save();

			//更新订单备货数量
			$detail = OrderDetail::find($orderdetail->id);
			$detail->confirm_quantity = $confirm_quantity;
			$detail->save();
		}
		//总计，匹数，米数，金额
		$stock->stockup_count = $stockup_count;
		$stock->item_count = $item_count;
		$stock->amount = $amount;
		$stock->save();
		//更新订单状态|应付款项合计
		$order->item_fee = $amount;
		$order->order_status = 'order_stockuped';
		$order->save();
		return Redirect::to('admin/stockups');
	}

	/**
	 * postModal
	 */
	public function postModal()
	{
		$stockup = Input::get('stockup');

		$stockup = json_decode($stockup, true);
		$order = Order::find(Input::get('order_id'));

		$list = array();
		$count = 0;

		foreach($order->orderdetails as $orderdetail)
		{
			if(isset($stockup[$orderdetail->item->code])){
				$list[$orderdetail->item->code]['stockup'] = $stockup[$orderdetail->item->code];
				$list[$orderdetail->item->code]['quantity'] = $orderdetail->quantity;
				if(count($stockup[$orderdetail->item->code])>$count)
				{
					$count = count($stockup[$orderdetail->item->code]);
				}
			} else {
				$list[$orderdetail->item->code]['stockup'] = array();
				$list[$orderdetail->item->code]['quantity'] = $orderdetail->quantity;
			}
		}

		return View::make('admin.stockups.mymodal')->with('list', $list)->with('count', $count)->with('order_id', $order->id);
	}

	/**
	 * getDatatable
	 */
	public function getDatatable()
	{
		$collection = Order::where('order_status', 'order_price_confirmed')->get();
    		return Datatable::collection($collection)
        ->showColumns('date', 'no', 'customer', 'status', 'actions')
        ->orderColumns('date', 'customer')
        ->searchColumns('date', 'no', 'customer')
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
        ->addColumn('actions', function($model) {
          return $str = '<button data-id="'.$model->id.'" class="btn btn-info btn-stockorder">查看货品</button>';
        })
        ->make();
	}

	/**
	 * Display a listing of the resource.
	 * GET /stockups
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return View::make('admin.stockups.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /stockups/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$order_id = Input::get('order_id');
		$order = Order::find($order_id);

		return View::make('admin.stockups.create')->with('order', $order);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /stockups
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /stockups/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /stockups/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /stockups/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /stockups/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}