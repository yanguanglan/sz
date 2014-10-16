@extends('layouts.cpanel')

@section('title')
	@parent - 部门列表
@stop

@section('breadcrumb')
	@parent
	    <li>
			部门
	    </li>
		<li>
			部门列表
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 部门列表</h2>
            </div>
            <div class="box-content">
               	{{ Datatable::table()
    				->addColumn('名称', '权限', '操作'
    					)
    				       // these are the column headings to be shown
    				->setUrl(route('api.departments'))   // this is the route where data will be retrieved
   					->render() }}
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
@stop