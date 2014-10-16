<?php

class ItemsController extends \BaseController {

	public function getDatatable()
	{
    	$collection = Item::all();
    		return Datatable::collection($collection)
        ->showColumns('code', 'price_market', 'stock', 'image',  'category')
        ->searchColumns('code', 'price_market', 'stock', 'category')
        ->orderColumns('code', 'price_market', 'stock', 'category')
        ->addColumn('category', function($model) {
			if(isset($model->category->name)) {
				return $model->category->name;
			} 
			return "无分类。。。";
        })
        ->addColumn('image', function($model) {
			if($model->image) {
				return HTML::image($model->image, $model->code, array('width'=>'80', 'height'=>'80'));
			} 
			return "无图片。。。";
        })
        ->addColumn('actions', function($model) {
          return $str = '<a href="'.URL::route('admin.items.edit', $model->id).'" class="btn btn-info btn-sm pull-left" role="button">编辑</a>

					'.Form::open(array('route' => array('admin.items.destroy', $model->id), 'method' => 'delete', 'data-confirm' => '确定操作？')).'
							<button type="submit" class="btn btn-danger btn-sm">删除</button>'
					.Form::close();
        })
        ->make();
	}

	/**
	 * Display a listing of items
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = Item::all();

		return View::make('admin.items.index', compact('items'));
	}

	/**
	 * Show the form for creating a new item
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.items.create');
	}

	/**
	 * Store a newly created item in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Item::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['short_name'] = '';
 		
 		if(Input::hasFile('image')) {
			//large
			Image::make(Input::file('image'))->save(public_path().'/uploads/product/origin.'.$data['code'].".jpg");

			Image::make(Input::file('image'))->resize(1000, 1000)->save(public_path().'/uploads/product/large.'.$data['code'].".jpg");

			Image::make(Input::file('image'))->resize(250, 250)->save(public_path().'/uploads/product/medium.'.$data['code'].".jpg");

			Image::make(Input::file('image'))->resize(120, 120)->save(public_path().'/uploads/product/small.'.$data['code'].".jpg");

			$data['image'] = '/uploads/product/medium.'.$data['code'].".jpg";
		} else {
			$data['image'] = '';
		}

		$data['attribute'] = '';

		Item::create($data);

		return Redirect::route('admin.items.index');
	}

	/**
	 * Display the specified item.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$item = Item::findOrFail($id);

		return View::make('admin.items.show', compact('item'));
	}

	/**
	 * Show the form for editing the specified item.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$item = Item::find($id);

		return View::make('admin.items.edit', compact('item'));
	}

	/**
	 * Update the specified item in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$item = Item::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Item::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$item->update($data);

		return Redirect::route('admin.items.index');
	}

	/**
	 * Remove the specified item from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Item::destroy($id);

		return Redirect::route('admin.items.index');
	}

}
