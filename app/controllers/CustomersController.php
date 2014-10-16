<?php

class CustomersController extends \BaseController {

	public function getDatatable()
	{
    	$collection = Customer::all();
    		return Datatable::collection($collection)
        ->showColumns('date', 'name', 'mobile', 'qq',  'mail', 'street', 'address',
        	'type')
        ->searchColumns('date', 'name', 'mobile', 'qq', 'mail', 'street', 'address',
        	'type')
        ->orderColumns('date', 'name', 'mobile', 'qq', 'mail', 'street', 'address',
        	'type')
        ->addColumn('date',function($model)
        {
            return date('Y-m-d', strtotime($model->created_at));
        })
        ->addColumn('type', function($model) {
        	if($model->type == 0) {
        		$str='<span class="label-warning label">客服注册</span>';
        	} else {
        		$str='<span class="label-success label">网络注册</span>';
        	}
          
            return  $str;
        })
        ->addColumn('actions', function($model) {
          return $str = '<a href="'.URL::route('admin.suppliers.edit', $model->id).'" class="btn btn-info btn-sm pull-left">编辑</a>

					'.Form::open(array('route' => array('admin.suppliers.destroy', $model->id), 'method' => 'delete', 'data-confirm' => '确定操作？')).'
							<button type="submit" class="btn btn-danger btn-sm pull-right">删除</button>'
					.Form::close();
        })
        ->make();
	}

	/**
	 * Display a listing of customers
	 *
	 * @return Response
	 */
	public function index()
	{
		$customers = Customer::all();

		return View::make('admin.customers.index', compact('customers'));
	}

	/**
	 * Show the form for creating a new customer
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.customers.create');
	}

	/**
	 * Store a newly created customer in storage.
	 *
	 * @return Response
	 */
	public function store()
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
		$data['telephone'] = '';
		$data['url'] = '';
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

		return Redirect::route('admin.customers.index');
	}

	/**
	 * Display the specified customer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$customer = Customer::findOrFail($id);

		return View::make('admin.customers.show', compact('customer'));
	}

	/**
	 * Show the form for editing the specified customer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$customer = Customer::find($id);

		return View::make('admin.customers.edit', compact('customer'));
	}

	/**
	 * Update the specified customer in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$customer = Customer::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Customer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$customer->update($data);

		return Redirect::route('admin.customers.index');
	}

	/**
	 * Remove the specified customer from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Customer::destroy($id);

		return Redirect::route('admin.customers.index');
	}

}
