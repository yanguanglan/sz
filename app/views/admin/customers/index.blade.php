@extends('layouts.cpanel')

@section('title')
	@parent - 供应商列表
@stop

@section('breadcrumb')
	@parent
	    <li>
			客户
	    </li>
		<li>
			客户列表
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 客户列表</h2>
            </div>
            <div class="box-content">
               	{{ Datatable::table()
    				->addColumn('时间', '姓名', '手机', 'QQ', '邮箱', '地区', '联系地址', '类型', '操作'
    					)
    				       // these are the column headings to be shown
    				->setUrl(route('api.customers'))   // this is the route where data will be retrieved
   					->render() }}
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
@stop