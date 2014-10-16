@foreach($order->orderdetails as $orderdetail)
<div class="row">
	<div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 货品详情</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>                </div>
            </div>
            <div class="box-content">
            	<table class="table table-striped table-bordered responsive">
            		<tr>
            			<th>型号</th>
            			<th>预定总量</th>
            			<th>总库存</th>
            		</tr>
            		<tr>
            			<td>
            				{{$orderdetail->item->code}}
            			</td>
            			<td>
            				{{$orderdetail->quantity}}
            			</td>
            			<td>
            				{{$orderdetail->item->stock + $orderdetail->item->readystock}}
            			</td>
            		</tr>
            	</table>
           		
            	 <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="active"><a href="#{{$orderdetail->id}}item1">原库存<span class="notification red">{{$orderdetail->item->stock}}</span></a></li>
                     <li><a href="#{{$orderdetail->id}}item2">预录入<span class="notification green">{{$orderdetail->item->readystock}}</span></a></li>
                    <li><a href="#{{$orderdetail->id}}item3">已到未拆包<span class="notification yellow">0</span></a></li>
                    <li><a href="#{{$orderdetail->id}}item4">今日将出<span class="notification">0</span></a></li>
                </ul>
            
               	<div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="{{$orderdetail->id}}item1">
                    	<div class="box">
                    	<ul class="nav nav-pills" id="myPosition">
						 @foreach($orderdetail->item->warehouses as $warehouse)
						  <li class="active"><a href="#{{$warehouse->id}}">{{$warehouse->position}}<span class="notification red">{{$warehouse->quantity}}</span></a></li>
						 @endforeach
						</ul>
						<div id="myPositionContent" class="tab-content">
						@foreach($orderdetail->item->warehouses as $warehouse)
							<div class="tab-pane active" id="{{$warehouse->id}}">
								<div class="box">

									<table class="table table-striped table-bordered responsive">
									<?php
									//匹数
									$item = ItemReceivedPackageDetail::where('item', $orderdetail->item->code)
									->where('readyposition', $warehouse->position)
									->where('status', 2)
									->get();

									$count = ceil(round($orderdetail->item->stock / 50) / 8);


									for($i=$j=0; $i<$count; $i++){
									?>
									<tr>
										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-position="{{$warehouse->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@else<td data-id="{{$orderdetail->item->code}}"><input data-position="{{$warehouse->id}}" name="a1" class="form-control item-input" value=""></td>@endif

										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-position="{{$warehouse->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@else<td data-id="{{$orderdetail->item->code}}"><input data-position="{{$warehouse->id}}" name="a1" class="form-control item-input" value=""></td>@endif

										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-position="{{$warehouse->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@else<td data-id="{{$orderdetail->item->code}}"><input data-position="{{$warehouse->id}}" name="a1" class="form-control item-input" value=""></td>@endif

										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-position="{{$warehouse->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@else<td data-id="{{$orderdetail->item->code}}"><input data-position="{{$warehouse->id}}" name="a1" class="form-control item-input" value=""></td>@endif

										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-position="{{$warehouse->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@else<td data-id="{{$orderdetail->item->code}}"><input data-position="{{$warehouse->id}}" name="a1" class="form-control item-input" value=""></td>@endif

										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-position="{{$warehouse->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@else<td data-id="{{$orderdetail->item->code}}"><input data-position="{{$warehouse->id}}" name="a1" class="form-control item-input" value=""></td>@endif

										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-position="{{$warehouse->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@else<td data-id="{{$orderdetail->item->code}}"><input data-position="{{$warehouse->id}}" name="a1" class="form-control item-input" value=""></td>@endif

										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-position="{{$warehouse->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@else<td data-id="{{$orderdetail->item->code}}"><input data-position="{{$warehouse->id}}" name="a1" class="form-control item-input" value=""></td>@endif
									</tr>
									<?php 
									}
									?>
									</table>

								</div>
							</div><!--p1-->
						@endforeach
						</div><!--myPositionContent-->
					   </div><!--box-->
                    </div><!--item1-->
                    <div class="tab-pane" id="{{$orderdetail->id}}item2">
                        <div class="box">

									<table class="table table-striped table-bordered responsive">
									<?php
									//匹数
									$item = ItemReceivedPackageDetail::where('item', $orderdetail->item->code)
									->where('status', '<', 2)
									->get();


									$count = ceil( count($item) / 8);


									for($i=$j=0; $i<$count; $i++){
									?>
									<tr>
										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@endif
										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@endif
										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@endif
										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@endif
										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@endif
										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@endif
										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@endif
										@if(isset($item[$k=$j++]))<td data-id="{{$orderdetail->item->code}}" class="item"><span data-item="{{$item[$k]->id}}" data-quantity="{{$item[$k]->quantity}}" >{{$item[$k]->quantity}}</span></td>
										@endif
									</tr>
									<?php 
									}
									?>
									</table>

								</div>
                    </div><!--item2-->
                    <div class="tab-pane" id="{{$orderdetail->id}}item3">
                        <div class="box">
                        </div>
                    </div><!--item3-->
                    <div class="tab-pane" id="{{$orderdetail->id}}item4">
                        <div class="box">
                        </div>
                    </div><!--item4-->
                </div><!--myTabContent-->
            </div><!--box-content-->
        </div><!--box-inner-->
    </div><!--box col-md-12-->
</div><!--row-->
@endforeach
<div class="row">
	<div class="col-md-12">
	<input type="hidden" name="order_id" id="order_id" value="{{$order->id}}">
	<button class="btn btn-primary btn-block btn-lg btn-stockup">确认备货</button>
</div>
</div>
<script>
	$('.item').click(function(e){
		$(this).toggleClass('success');
	});

	$('.item-input').change(function(e){
		if(!isNaN(parseInt($(this).val())) && parseInt($(this).val())!=0) {
			$(this).parent().addClass('success');
		}else{
			$(this).parent().removeClass('success');
		}
	});

    $('#myTab a:first').tab('show');
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    $('#myPosition a:first').tab('show');
    $('#myPosition a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

        $('.btn-minimize').click(function (e) {
        e.preventDefault();
        var $target = $(this).parent().parent().next('.box-content');
        if ($target.is(':visible')) $('i', $(this)).removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        else                       $('i', $(this)).removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        $target.slideToggle();
    });
</script>