<div class="row">
	<div class="box col-md-12">
		 <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 仓库打包</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>                </div>
            </div>
            <div class="box-content">
            	<form class="form-horizontal" role="form">
                        <div class="form-group">
					    <label class="col-sm-2 control-label">客户姓名</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$order->customer->name}}</p>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">手机号码</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$order->customer->mobile}}</p>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">收获地址</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$order->customer->address}}</p>
					    </div>
					  </div>
					</form>
				<?php
				$stockupdetails = $order->orderstockup->stockupdetails;
				$list = array();
				$count = 0;
				foreach ($stockupdetails as $stockupdetail) {
					$list[$stockupdetail->item->code][] = $stockupdetail;

					if(count($list[$stockupdetail->item->code])>$count){
						$count = count($list[$stockupdetail->item->code]);
					}
				}

				?>
            	<table class="table table-striped table-bordered responsive">
            		<tr>
            			<th>型号</th>
            			<?php
            			for($i=1; $i<=$count; $i++)
            			{
            			?>
            			<th>{{$i}}</th>
            			<?php
            			}
            			?>
            			<th>匹数</th>
            			<th>数量</th>
            		<tr>
            		@foreach($list as $key => $v)
            		<tr>
            			<td>{{$key}}</td>
            			<?php
						$item_count = $quantity_count = 0;
						for($i=0; $i<$count; $i++){
							if(isset($v[$i]->quantity)){
								$quantity = $v[$i]->quantity;
								$item_count++;
								$quantity_count+=$quantity;
							}
						?>
						<td class="item @if($v[$i]->packaged) danger @endif" data-id="{{$v[$i]->id}}">@if(isset($v[$i]->quantity)){{
							$v[$i]->quantity
						}}@endif</td>
						<?php
						}
						?>
						<td>{{$item_count}}</td>
						<td>{{$quantity_count}}</td>
            		</tr>
            		@endforeach
            		<tr>
            			<td>总计米数</td>
            			<td>{{$order->orderstockup->stockup_count}}</td>
            			<td>总计匹数</td>
            			<td>{{$order->orderstockup->item_count}}</td>
            			<td>总计金额</td>
            			<td>{{$order->orderstockup->amount}}</td>
            		</tr>
            	</table>
            	<div>
            		<button class="btn btn-primary btn-package">打包</button>
            		<button class="btn btn-danger btn-package-print">打印</button>
            		<input type="hidden" id="package_no" name="package_no" value="{{$package_no}}">
            		<input type="hidden" id="order_id" name="order_id" value="{{$order->id}}">
            	</div>
            </div>
         </div><!--box-inner-->
	</div>
</div>

<script>
	$('.item').click(function(e){
		if(!$(this).hasClass('danger')) {
			$(this).toggleClass('success');
		}
	});

	$(".btn-package-print").click(function(e){
		var print = true;
		$("td.item").each(function(i, v){
			if(!$(this).hasClass('danger')) {
				print = false;
			}
		});
		if(!print){
			alert('打包未完成!');
		} else{
			alert('print');
		}
	});

	$(".btn-package").click(function(e){
		var stockup = [];
		$("td.success").each(function(i, v){
			stockup.push(
				$(this).data('id')
			);
		});

		if(stockup.length>0) {
			$.ajax({
			  type: "POST",
			  url: "{{URL::to('admin/stockuppackages/modal')}}",
			  data: {stockup:JSON.stringify(stockup), order_id:$("#order_id").val(), package_no:parseInt($("#package_no").val())+1},
			  dataType: 'html'
			}).done(function(msg){
			  	$("#Stockuppackage-myModal").find(".modal-content").html(msg);
			    $("#Stockuppackage-myModal").modal('show');
			});
		} else {
			alert('请选打包布匹');
		}
	});
</script>