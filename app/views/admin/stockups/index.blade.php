@extends('layouts.cpanel')

@section('title')
	@parent - 备货订单
@stop

@section('breadcrumb')
	@parent
	    <li>
			仓库
	    </li>
		<li>
			备货订单
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 备货订单</h2>
            </div>
            <div class="box-content" id="order_table">
               	{{ Datatable::table()
    				->addColumn('订单日期', '订单编号', '客户', '状态', '操作'
    					)
    				       // these are the column headings to be shown
    				->setUrl(route('api.stockuporders'))   // this is the route where data will be retrieved
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
  $('#order_table').on('click', 'button.btn-stockorder', function(){
    $("#order_detail").load("{{ URL::to('admin/stockups/create')}}?order_id="+$(this).data("id"));
  });

  //确认备货
	$("#order_detail").on('click', '.btn-stockup', function(e){
		var stockup = {};
		$("td.success").each(function(i, v){
			var td = $(this);
			var span = td.find('span');
			var input = td.find('input');

			if(span.data('item')!==undefined) {
				if(stockup[td.data('id')] == undefined){
					stockup[td.data('id')]=[{
					'item':span.data('item'),
					'quantity':span.data('quantity'),
					'position':span.data('position')
					}];
				} else {
					stockup[td.data('id')].push({
					'item':span.data('item'),
					'quantity':span.data('quantity'),
					'position':span.data('position')
					});
				}
				
			}
			if(input.val()!==undefined){
				if(stockup[td.data('id')] == undefined){
					[{'quantity':input.val(),
					'position':input.data('position')
				     }];
				} else {
					stockup[td.data('id')].push({
					'quantity':input.val(),
					'position':input.data('position')
					});
				}
			}
		});
		//console.log(stockup);
		$.ajax({
		  type: "POST",
		  url: "{{URL::to('admin/stockups/modal')}}",
		  data: {stockup:JSON.stringify(stockup), order_id:$("#order_id").val()},
		  dataType: 'html'
		}).done(function(msg){
		  	$("#Stockup-myModal").find(".modal-content").html(msg);
		    $("#Stockup-myModal").modal('show');
		});
	});

});
</script>
@stop