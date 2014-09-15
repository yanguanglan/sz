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
			银行贷款费用明细
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 银行贷款费用明细</h2>
            </div>
            <div class="box-content">
               	{{ Datatable::table()
    				->addColumn('借款单位', '借款种类', '单据编号', '对方单位', '抵押物品', '抵押金额', '抵押评估金额', '保证单位', '保证金额', '借款金额', '借款日期', '还款日期', '贷款年利率', '付息日', '关联单位', '银行名称', '保证金比例', '敞口金额', '出票日期', '到期日期', '开证手续费', '承兑手续费', '吸收存款付费', '银行中间业务费', '其他', '操作'
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