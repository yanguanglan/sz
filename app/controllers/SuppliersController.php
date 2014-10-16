<?php

class SuppliersController extends \BaseController {

	public function getDatatable()
	{
    	$collection = Supplier::all();
    		return Datatable::collection($collection)
        ->showColumns('date', 'name', 'mobile', 'qq',  'mail', 'street', 'address',
        	'audit_status')
        ->searchColumns('date', 'name', 'mobile', 'qq', 'mail', 'street', 'address',
        	'audit_status')
        ->orderColumns('date', 'name', 'mobile', 'qq', 'mail', 'street', 'address',
        	'audit_status')
        ->addColumn('date',function($model)
        {
            return date('Y-m-d', strtotime($model->created_at));
        })
        ->addColumn('audit_status', function($model) {
        	if($model->audit_status == 0) {
        		$str='<span class="label-danger label">等待地区审核</span>';
        	} elseif ($model->audit_status == 1) {
        		$str='<span class="label-warning label">等待总部审核</span>';
        	} else {
        		$str='<span class="label-success label">正式成员</span>';
        	}
          
            return  $str;
        })
        ->addColumn('actions', function($model) {
          return $str = '<a href="'.URL::route('admin.suppliers.edit', $model->id).'" class="btn btn-info btn-sm pull-left">编辑</a>

					'.Form::open(array('route' => array('admin.suppliers.destroy', $model->id), 'method' => 'delete', 'data-confirm' => '确定操作？')).'
							<button type="submit" class="btn btn-danger btn-sm">删除</button>'
					.Form::close();
        })
        ->make();
	}

	/**
	 * Display a listing of suppliers
	 *
	 * @return Response
	 */
	public function index()
	{
		$suppliers = Supplier::all();

		return View::make('admin.suppliers.index', compact('suppliers'));
	}

	/**
	 * Show the form for creating a new supplier
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.suppliers.create');
	}

	/**
	 * Store a newly created supplier in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Supplier::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->with('type', 'error')->withErrors($validator)->withInput();
		}

		Supplier::create($data);

		return Redirect::route('admin.suppliers.index');
	}

	/**
	 * Display the specified supplier.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$supplier = Supplier::findOrFail($id);

		return View::make('admin.suppliers.show', compact('supplier'));
	}

	/**
	 * Show the form for editing the specified supplier.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$supplier = Supplier::find($id);

		return View::make('admin.suppliers.edit', compact('supplier'));
	}

	/**
	 * Update the specified supplier in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$supplier = Supplier::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Supplier::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$supplier->update($data);

		return Redirect::route('admin.suppliers.index');
	}

	/**
	 * Remove the specified supplier from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Supplier::destroy($id);

		return Redirect::route('admin.suppliers.index');
	}

}
