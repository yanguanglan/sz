<form name="Stockup-myModal-form" id="Stockup-myModal-form" method="POST" action="{{URL::to('admin/stockups/editmodal')}}">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3>备货确认</h3>
</div>
<div class="modal-body">
<div class="box-content">
<table class="table table-striped table-bordered responsive">
	<tr>
		<th>型号</th>
		<?php
		for($i=1; $i<=$count; $i++){
		?>
		<th>{{$i}}</th>
		<?php
		}
		?>
		<th>匹数</th>
		<th class="success">备货数量</th>
		<th class="danger">预定总量</th>
	</tr>
	@foreach($list as $k => $v)
	<tr>
		<td>{{$k}}</td>
		<?php
		$item_count = $quantity_count = 0;
		for($i=0; $i<$count; $i++){
			if(isset($v['stockup'][$i])){
				$quantity = $v['stockup'][$i]['quantity'];
				$item_count++;
				$quantity_count+=$quantity;
			}
		?>
		<td>@if(isset($v['stockup'][$i])){{
			$v['stockup'][$i]['quantity']
		}}@endif</td>
		<?php
		}
		?>
		<td>{{$item_count}}</td>
		<td class="success">{{$quantity_count}}</td>
		<td class="danger">{{$v['quantity']}}</td>
	</tr>
	@endforeach
</table>
</div>
<!-- /body -->
</div>
<div class="modal-footer">
<input type="hidden" name="stockup" value='{{json_encode($list)}}'>
<input type="hidden" name="order_id" value="{{$order_id}}">
<button class="btn btn-default" data-dismiss="modal">关闭</button>
<button type="submit" class="btn btn-primary" >提交</button>
</div>
</form>
