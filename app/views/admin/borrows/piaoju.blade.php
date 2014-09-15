@extends('layouts.cpanel')

@section('title')
	@parent - 新增货贷
@stop

@section('breadcrumb')
	@parent
	    <li>
			借贷管理
	    </li>
		<li>
			票据贴现费用明细
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 票据贴现费用明细</h2>
            </div>
            <div class="box-content">
               	{{ Datatable::table()
    				->addColumn('承兑（信用证）号', '票面金额', '贴现银行', '经办人', '联系电话', '贴现日期', '贴现天数', '贴现年利率', '贴现利息及费用', '到账金额', '到账日期', '到账单位', '到账账号', '到账银行', '备注', '操作'
    					)
    				       // these are the column headings to be shown
    				->setUrl(route('api.borrows', 'type='.Input::get('type')))   // this is the route where data will be retrieved
   					->render() }}
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
@stop