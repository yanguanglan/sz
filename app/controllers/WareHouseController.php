<?php
/**
 * 库存
 */
class WareHouseController extends \BaseController {

	/**
	 * getHistory
	 */
	public function getHistory()
	{
		return View::make('admin.warehouse.history');
	}

	/**
	 * getHistroy（入库历史）
	 */
	public function getDatatable()
	{
    	$collection = HistoryWarehouse::all();

    	return Datatable::collection($collection)
        ->showColumns('date', 'identity', 'item', 'batch', 'quantity', 'position', 'operator')
        ->searchColumns('date')
        ->orderColumns('date', 'identity', 'item', 'batch', 'quantity', 'position', 'operator')
        ->addColumn('date',function($model)
        {
            return date('Y-m-d H:i', strtotime($model->created_at));
        })
        ->make();
	}

	/**
	 * getModal (入库确认)
	 */ 
	public function getModal()
	{
		$identity = Input::get('identity');

		$itemReceivedPackageDetail = ItemReceivedPackageDetail::where('identity', $identity)
															  ->where('status', 1)
															  ->first();
		return View::make('admin.warehouse.modal')->with('itemReceivedPackageDetail', $itemReceivedPackageDetail);
	}

	/**
	 * postModal (入库确认)
	 */
	public function postModal()
	{
		//itemReceivedPackageDetail->id
		$id = Input::get('id');
		$position = Input::get('readyposition');
		$itemReceivedPackageDetail = ItemReceivedPackageDetail::find($id);
		$itemReceivedPackageDetail->status = 2;
		$itemReceivedPackageDetail->readyposition = $position;
		$itemReceivedPackageDetail->save();

		//历史入库记录
		$historyWareHouse = new HistoryWarehouse;
		$historyWareHouse->identity = $itemReceivedPackageDetail->identity;
		$historyWareHouse->item = $itemReceivedPackageDetail->item;
		$historyWareHouse->batch = $itemReceivedPackageDetail->batch;
		$historyWareHouse->quantity = $itemReceivedPackageDetail->quantity;
		$historyWareHouse->position = $position;
		$historyWareHouse->operator = 5;
		$historyWareHouse->save();

		//库存汇总
		$wareHouse = Warehouse::where('item', $itemReceivedPackageDetail->item)
		                      ->where('position', $position)
		                      ->first();
		if($wareHouse) {
			$wareHouse->quantity = $wareHouse->quantity + $itemReceivedPackageDetail->quantity;
			$wareHouse->save();
		} else {
			$wareHouse = new Warehouse;
			$wareHouse->item = $itemReceivedPackageDetail->item;
			$wareHouse->position = $position;
			$wareHouse->quantity = $itemReceivedPackageDetail->quantity;
			$wareHouse->save();
		}
		
		//更新item总库存
		$items = Item::where('code', $itemReceivedPackageDetail->item)->first();
		$items->stock += $itemReceivedPackageDetail->quantity;
		$items->readystock -= $itemReceivedPackageDetail->quantity;
		$items->save();

		return Redirect::back();
	}

	/**
	 * Display a listing of the resource.
	 * GET /warehouse
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /warehouse/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /warehouse
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /warehouse/{id}
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
	 * GET /warehouse/{id}/edit
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
	 * PUT /warehouse/{id}
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
	 * DELETE /warehouse/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}