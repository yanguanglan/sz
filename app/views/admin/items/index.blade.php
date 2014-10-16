@extends('layouts.cpanel')

@section('title')
	@parent - 供应商列表
@stop

@section('breadcrumb')
	@parent
	    <li>
			货品
	    </li>
		<li>
			货品列表
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 货品列表</h2>
            </div>
            <div class="box-content">
               	{{ Datatable::table()
    				->addColumn('型号', '市场价', '库存', '图片', '分类', '操作'
    					)
    				       // these are the column headings to be shown
    				->setUrl(route('api.items'))   // this is the route where data will be retrieved
   					->render() }}
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
@stop