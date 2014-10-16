<?php

class StockuppackagesController extends \BaseController {
	/*
     * postModal
     */
	public function postModal()
	{
		$stockup = Input::get('stockup');

		$stockup = json_decode($stockup, true);

		$order = Order::find(Input::get('order_id'));

		$stockupdetails = StockupDetail::whereIn('id', $stockup)->get();

		$package_no = Input::get('package_no');

		return View::make('admin.stockuppackages.mymodal')->with('package_no', $package_no)->with('stockupdetails', $stockupdetails)->with('order', $order);
	}

	/**
	 * postEditModal
	 */
	public function postEditModal()
	{
		$stockuppackage = Input::get('stockuppackage');
		$stockuppackage = json_decode($stockuppackage, true);
		$order_id = Input::get('order_id');
		$package_no = Input::get('package_no');

		//生成package
		$package = new Stockpackage;
		$package->order_id = $order_id;
		$package->package_no = $package_no;
		$package->item_count = 0;
		$package->save();
		//插入packagedetail
		$item_count = 0;
		foreach ($stockuppackage as $k => $p) {
			foreach ($p as $v) {
				$detail = new StockpackageDetail;
				$detail->package_id = $package->id;
				$detail->item = $k;
				$detail->quantity = $v['quantity'];
				$detail->position = $v['position'];
				$detail->identity = $v['identity'];
				$detail->status = $v['status'];
				$detail->save();
				$item_count += $v['quantity'];
				$stockupdetail = StockupDetail::find($v['id']);
				$stockupdetail->packaged = 1;
				$stockupdetail->save();
			}
		}
		$package->item_count = $item_count;
		$package->save();

		return Response::json(array('msg'=>'1'));
		//修改stockupdetail packaged
	}

	/**
	 * getDatatable
	 */
	public function getDatatable()
	{
		$collection = Order::where('order_status', 'order_stockuped')->get();
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
	 * GET /stockuppackages
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return View::make('admin.stockuppackages.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /stockuppackages/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$order_id = Input::get('order_id');
		$order = Order::find($order_id);
		$package_no = Stockpackage::all()->count();
		return View::make('admin.stockuppackages.create')->with('order', $order)->with('package_no', $package_no);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /stockuppackages
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /stockuppackages/{id}
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
	 * GET /stockuppackages/{id}/edit
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
	 * PUT /stockuppackages/{id}
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
	 * DELETE /stockuppackages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}