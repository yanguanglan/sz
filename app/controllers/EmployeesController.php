<?php

class EmployeesController extends \BaseController {

	/**
	 * getDatatable
	 */
	public function getDatatable()
	{
		$collection = Employee::all();
    		return Datatable::collection($collection)
        ->showColumns('date', 'name', 'mobile', 'actived', 'department')
        ->orderColumns('date', 'name', 'actived')
        ->searchColumns('date', 'name', 'mobile')
        ->addColumn('date',function($model)
        {
            return date('Y-m-d', strtotime($model->created_at));
        })
         ->addColumn('department',function($model)
        {
            return $model->department->name;
        })
        ->addColumn('actived',function($model)
        {
            if($model->actived == 0){
            	return '<span class="label label-danger">禁用</span>';
            } else {
            	return '<span class="label label-success">激活</span>';
            }
        })
        ->addColumn('actions', function($model) {
          return $str = '<button data-id="'.$model->id.'" class="btn btn-info btn-employee">查看</button>';
        })
        ->make();
	}

	/**
	 * Display a listing of employees
	 *
	 * @return Response
	 */
	public function index()
	{
		$employees = Employee::all();

		return View::make('admin.employees.index', compact('employees'));
	}

	/**
	 * Show the form for creating a new employee
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.employees.create');
	}

	/**
	 * Store a newly created employee in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Employee::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['no'] = '';
		$data['short_name'] = '';
		$data['right'] = '';
		$data['actived'] = 1;

		Employee::create($data);

		return Redirect::route('admin.employees.index');
	}

	/**
	 * Display the specified employee.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$employee = Employee::findOrFail($id);

		return View::make('admin.employees.show', compact('employee'));
	}

	/**
	 * Show the form for editing the specified employee.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$employee = Employee::find($id);

		return View::make('admin.employees.edit', compact('employee'));
	}

	/**
	 * Update the specified employee in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$employee = Employee::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Employee::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$employee->update($data);

		return Redirect::route('admin.employees.index');
	}

	/**
	 * Remove the specified employee from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Employee::destroy($id);

		return Redirect::route('admin.employees.index');
	}

}
