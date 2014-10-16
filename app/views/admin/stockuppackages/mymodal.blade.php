<!--<form name="Stockuppaceages-myModal-form" id="Stockuppaceages-myModal-form" method="POST" action="{{URL::to('admin/stockuppackages/editmodal')}}">-->
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3>备货打包</h3>
</div>
<div class="modal-body">
<div class="box-content">
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
					  <div class="form-group">
					    <label class="col-sm-2 control-label">包号</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$package_no}}</p>
					    </div>
					  </div>
				<?php
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
            			$package_item_count = 0;
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
								$package_item_count +=$quantity;
							}
						?>
						<td>@if(isset($v[$i]->quantity)){{
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
            			<td colspan="{{$count+2}}">{{$package_item_count}}</td>
            		</tr>
            	</table>
</div>
<!-- /body -->
</div>
<div class="modal-footer">
<input type="hidden" id="stockuppackage" name="stockuppackage" value='{{json_encode($list)}}'>
<input type="hidden" id="order_id" name="order_id" value="{{$order->id}}">
<input type="hidden" id="package_no" name="package_no" value="{{$package_no}}">
<button class="btn btn-default" data-dismiss="modal">关闭</button>
<button type="button" class="btn btn-primary btn-stockuppackage" data-dismiss="modal" >提交</button>
</div>
<!--</form>-->
<script>
$(document).on('click', '.btn-stockuppackage', function(e){
	$.ajax({
			  type: "POST",
			  url: "{{URL::to('admin/stockuppackages/editmodal')}}",
			  data: {stockuppackage:$("#stockuppackage").val(), order_id:$("#order_id").val(), package_no:$("#package_no").val()},
			  dataType: 'json'
			}).done(function(data){
			  	if(data.msg==1){
			  	$("#order_detail").load("{{ URL::to('admin/stockuppackages/create')}}?order_id="+$("#order_id").val());

			  }
			});
});
</script>
