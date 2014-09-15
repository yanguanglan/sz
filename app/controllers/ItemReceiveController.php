<?php
/**
 * 预录入
 */
class ItemReceiveController extends \BaseController {

	/**
	 * getModal (选择代理商)
	 */
	public function getModal()
	{
		$suppliers = Supplier::all();  
		return View::make('admin.itemreceive.modal')->with('suppliers', $suppliers);
	}

	/**
	 * postModal (选择代理商)
	 */
	public function postModal()
	{
		$validator = Validator::make(Input::all(), ItemReceive::$rules);

		if ($validator->passes()) {

			$itemReceive = new ItemReceive;
			$itemReceive->supplier_id = Input::get('supplier_id');
			$itemReceive->no = '';
			$itemReceive->received_date = date('Y-m-d', time());
			$itemReceive->item_count = 0;
			$itemReceive->package_count = 0;
			$itemReceive->amount = 0;
			$itemReceive->status = 0;
			$itemReceive->save();

			return Redirect::to('admin/itemreceive/create?id='.$itemReceive->id);	
		}

		return Redirect::to('admin/itemreceive')
			->with('type', 'error')
			->withErrors($validator)
			->withInput();
	}

	/**
	 * postModalEdit (选择代理商获得收包列表)
	 */
	public function getModalEdit()
	{
		$supplier = Supplier::find(Input::get('supplier_id'));
		//列出供应商所有包号
		return View::make('admin.itemreceive.modaledit')->with('supplier', $supplier);
	}

	public function getDatatable()
    {
    	$collection = DB::table('item_received_packages')
        ->leftJoin('item_receives', 'item_received_packages.received_id', '=', 'item_receives.id')
        ->where('item_receives.supplier_id', '=', Input::get('supplier_id'))
        ->where('item_received_packages.status', '=', 0)
        ->select('item_received_packages.id', 'item_received_packages.package_received_date', 'item_received_packages.package_no', 'item_received_packages.item_count');
        //->get();

    	#票据

    	return Datatable::query($collection)
        ->showColumns('package_received_date', 'package_no', 'item_count')
        ->searchColumns('package_received_date')
        ->orderColumns('package_received_date', 'package_no', 'item_count')
        ->addColumn('actions', function($model) {
          return $str =Form::open(array('route' => array('itemreceive.packageconfirm.post', 'package_id='.$model->id), 'method' => 'post', 'data-confirm' => '确定操作？')).'
							<button type="submit" class="btn btn-primary">到包确认</button>'
					.Form::close();
        })
        ->make();
    }

    /**
     * postPackageConfirm (到包确认)
     */
    public function postPackageConfirm()
    {
    	$package = ItemReceivedPackage::find(Input::get('package_id'));
    	$package->status = 1;
    	$package_checked_date = date('Y-m-d', time());
    	$package->save();
    	return Redirect::back();
    }

    /**
     * getPackageModalEdit (抄包录入)
     */
    public function getPackageModalEdit()
    {   
    	$supplier = Supplier::find(Input::get('id'));
    	return View::make('admin.itemreceive.packagemodaledit')->with('supplier', $supplier);
    }

    /**
     * postPackageModalEdit (抄包录入)
     */
    public function postPackageModalEdit()
    {
    	$supplier_id = Input::get('supplier_id');
    	//新建收货清单
    		$itemReceive = new ItemReceive;
			$itemReceive->supplier_id = $supplier_id;
			$itemReceive->no = '';
			$itemReceive->received_date = date('Y-m-d', time());
			$itemReceive->item_count = 0;
			$itemReceive->package_count = 0;
			$itemReceive->amount = 0;
			$itemReceive->status = 0;
			$itemReceive->save();

			$received_id = $itemReceive->id;
    	//新建包裹
			$package_no = Input::get('package_no');
			$item_count = Input::get('item_count');
			for ($i=0; $i < count($package_no); $i++) { 
				if(!empty($package_no[$i])) {
					$itemReceivedPackage = new ItemReceivedPackage;
					$itemReceivedPackage->package_no = $package_no[$i];
					$itemReceivedPackage->received_id = $received_id;
					$itemReceivedPackage->package_received_date = date('Y-m-d', time());
					$itemReceivedPackage->package_checked_date = date('Y-m-d', time());
					$itemReceivedPackage->item_count = $item_count[$i];
					$itemReceivedPackage->amount = 0;
					$itemReceivedPackage->status = 1;
					$itemReceivedPackage->save();
				}
			}
    	//列出抄包列表
		#今天
		$today = date('Y-m-d', time());
		$packages = ItemReceivedPackage::where('received_id', $received_id)
										->where('package_checked_date', $today)
										->get();
		$supplier = Supplier::find($supplier_id);

		return View::make('admin.itemreceive.packagemodaleditdetail')->with('supplier', $supplier)->with('packages', $packages);
		
    }

	/**
	 * getPackageModal (分包录入)
	 */
	public function getPackageModal()
	{
		$itemReceive = ItemReceive::find(Input::get('id'));
		return View::make('admin.itemreceive.packagemodal')->with('itemReceive', $itemReceive);
	}

	/**
	 * postPackageModal (分包录入)
	 */
	public function postPackageModal()
	{
		$id = Input::get('id');
		//添加包
		$itemReceivedPackage = new ItemReceivedPackage;
		$itemReceivedPackage->package_no = Input::get('package_no');
		$itemReceivedPackage->received_id = $id;
		$itemReceivedPackage->package_received_date = date('Y-m-d', time());
		$itemReceivedPackage->package_checked_date = date('Y-m-d', time());
		$itemReceivedPackage->item_count = 0;
		$itemReceivedPackage->amount = 0;
		$itemReceivedPackage->status = 0;
		$itemReceivedPackage->save();
		$package_id = $itemReceivedPackage->id;

		//添加1匹
		$item = Input::get('item');
		$quantity = Input::get('quantity');
		$batch = Input::get('batch');
		$price = Input::get('price');
		$item_count = 0;
		$amount = 0;

		for ($i=0; $i < count($item); $i++) { 
			if(!empty($item[$i])) {
				$itemReceivedPackageDetail = new ItemReceivedPackageDetail;
				$itemReceivedPackageDetail->package_id = $package_id;
				$itemReceivedPackageDetail->identity = '';
				$itemReceivedPackageDetail->supplier_id = $id;
				$itemReceivedPackageDetail->item = $item[$i];
				$itemReceivedPackageDetail->price = $price[$i];
				$itemReceivedPackageDetail->quantity = $quantity[$i];
				$itemReceivedPackageDetail->batch = $batch[$i];
				$itemReceivedPackageDetail->position = '';
				$itemReceivedPackageDetail->readyposition = '';
				$itemReceivedPackageDetail->status = 0;
				$itemReceivedPackageDetail->save();

				//米数
				$item_count += $quantity[$i];
				//金额
				$amount += $price[$i] * $quantity[$i];
			}
		}

		//更新包
		$itemReceivedPackage = ItemReceivedPackage::find($package_id);
		$itemReceivedPackage->item_count = $item_count;
		$itemReceivedPackage->amount = $amount;
		$itemReceivedPackage->save();
		
		//更新货单
		$itemReceive = ItemReceive::find($id);
		$itemReceive->item_count = $itemReceive->item_count + $item_count;
		$itemReceive->package_count = $itemReceive->package_count + 1;
		$itemReceive->amount = $itemReceive->amount + $amount;
		$itemReceive->save();

		return Redirect::to('admin/itemreceive/create?id='.$id);	
	}

	/**
	 * getPackageDetailModal (拆包)
	 */
	public function getPackageDetailModal()
	{
		$suppliers = Supplier::all();  
		return View::make('admin.itemreceive.packagedetailmodal')->with('suppliers', $suppliers);
	}

	/**
	 * postPackageDetailModal (拆包)
	 */
	public function postPackageDetailModal()
	{
		$supplier_id = Input::get('supplier_id');
		$received_date = Input::get('received_date');
		$package_no = Input::get('package_no');

		//包
		$package = DB::table('item_received_packages')
        ->leftJoin('item_receives', 'item_received_packages.received_id', '=', 'item_receives.id')
        ->where('item_receives.supplier_id', '=', $supplier_id)
        ->where('item_receives.received_date', '=', $received_date)
        ->where('item_received_packages.package_no', '=', Input::get('package_no'))
        ->select('item_received_packages.id')
        ->get();

        //供应商
        $supplier = Supplier::find($supplier_id);

        $itemReceivedPackageDetails = array();
        if(isset($package[0]->id)) {
        	$itemReceivedPackageDetails = ItemReceivedPackageDetail::where('package_id', $package[0]->id)->get();
        }
		
       	return View::make('admin.itemreceive.packagedetail')->with('itemReceivedPackageDetails', $itemReceivedPackageDetails)->with('supplier', $supplier)->with('received_date', $received_date)->with('package_no', $package_no);
	}

	/**
	 * Display a listing of the resource.
	 * GET /itemreceive
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$itemReceives = ItemReceive::paginate(15);

		return View::make('admin.itemreceive.index')->with('itemReceives', $itemReceives);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /itemreceive/create
	 *
	 * @return Response
	 */
	public function create()
	{	

		$itemReceive = ItemReceive::find(Input::get('id'));

		$itemReceivedPackages = ItemReceivedPackage::where('received_id', Input::get('id'))->get();

		return View::make('admin.itemreceive.create')->with('itemReceive', $itemReceive)->with('itemReceivedPackages', $itemReceivedPackages);
	}

	/**
	 * getDetail (查看收货清单)
	 */
	public function getDetail()
	{	

		$itemReceive = ItemReceive::find(Input::get('id'));

		$itemReceivedPackages = ItemReceivedPackage::where('received_id', Input::get('id'))->get();

		return View::make('admin.itemreceive.detail')->with('itemReceive', $itemReceive)->with('itemReceivedPackages', $itemReceivedPackages);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /itemreceive
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /itemreceive/{id}
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
	 * GET /itemreceive/{id}/edit
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
	 * PUT /itemreceive/{id}
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
	 * DELETE /itemreceive/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}