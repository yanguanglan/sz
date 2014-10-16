@extends('layouts.cpanel')

@section('title')
	@parent - 订单列表
@stop

@section('breadcrumb')
	@parent
	    <li>
			销售
	    </li>
		<li>
			订单列表
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 订单列表</h2>
            </div>
            <div class="box-content" id="order_table">
               	{{ Datatable::table()
    				->addColumn('订单日期', '订单编号', '客户', '状态', '总货款', '保证金', '积分抵扣', '信用抵扣', '已收货款', '实收款', '应付款', '操作'
    					)
    				       // these are the column headings to be shown
    				->setUrl(route('api.orders'))   // this is the route where data will be retrieved
   					->render() }}
            </div>
        </div>
    </div>
    <!--/span-->
</div><!--/row-->
<div id="order_detail">
</div>
<script>
$(function() {
  //查看详细订单
  $('#order_table').on('click', 'button.btn-order', function(){
    $("#order_detail").load("{{ URL::to('admin/orders')}}" + '/' + $(this).data("id"));
  });

});
</script>
@stop