<div class="row">
	<div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 订单详情</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>                </div>
            </div>
            <div class="box-content">
               	<ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#info">状态处理</a></li>
                    <li><a href="#customer">客户</a></li>
                    <li><a href="#pay">付款</a></li>
                    <li><a href="#shipping">配送</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                    	<form class="form-horizontal" role="form">
                        <div class="form-group">
					    <label class="col-sm-2 control-label">当前状态</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{get_order_status($order->order_status)}}</p>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">等待处理</label>
					    <div class="col-sm-10">
					      <button class="btn btn-info">修改订单</button>
					    </div>
					  </div>
					</form>
                    </div>
                    <div class="tab-pane" id="customer">
                        <form class="form-horizontal" role="form">
                        <div class="form-group">
					    <label class="col-sm-2 control-label">客户姓名</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$order->customer->name}}</p>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">手机号码</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$order->customer->mobile}}</p>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">收获地址</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$order->customer->address}}</p>
					    </div>
					  </div>
					</form>
                    </div>
                    <div class="tab-pane" id="pay">
                    	<div class="box" id="payment_table">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>时间</th>
        <th>支付类型</th>
        <th>流水号</th>
        <th>金额</th>
        <th>备注</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
        @foreach($order->payments as $payment)
    <tr>
        <td class="center">{{$payment->paydate}}</td>
        <td class="center">{{$payment->paymentmethod->name}}</td>
        <td class="center">
            {{$payment->no}}
        </td>
        <td class="center">
            {{$payment->amount}}
        </td>
        <td class="center">
            {{$payment->memo}}
        </td>
        <td class="center">
            
        </td>
    </tr>
        @endforeach
    <tr>
        <td class="center"><input id="paydate" type="datetime-local" name="paydate" class="form-control"></td>
        <td class="center">
            {{Form::select('payment_method_id', 
                                PaymentMethod::lists('name', 'id'),
                                null,
                                array('class'=>'form-control', 'id'=>'payment_method_id')
                            )}}
        </td>
        <td class="center">
            <input type="text" id="no" name="no" class="form-control">
        </td>
          <td class="center"><input id="amount" type="text" name="amount" class="form-control"></td>
        <td class="center">
            <input type="text" id="memo" name="memo" class="form-control">
        </td>
         <td class="center">
            <button class="btn btn-info btn-payment">添加</button>
        </td>
    </tr>
    </tbody>
    </table>
</div>
                    </div>
                    <div class="tab-pane" id="shipping">
                        <div class="box" id="shipping_table">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>时间</th>
        <th>物流单号</th>
        <th>物流名称</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
        @foreach($order->shippings as $shipping)
    <tr>
        <td class="center">{{$shipping->shipping_date}}</td>
        <td class="center">
            {{$shipping->no}}
        </td>
        <td class="center">
            {{$shipping->carrier}}
        </td>
        <td class="center">
            
        </td>
    </tr>
        @endforeach
    <tr>
        <td class="center"><input id="shipping_date" type="datetime-local" name="shipping_date" class="form-control"></td>
        <td class="center">
            <input type="text" id="shippingno" name="shippingno" class="form-control">
        </td>
          <td class="center"><input id="carrier" type="text" name="carrier" class="form-control"></td>
         <td class="center">
            <button class="btn btn-info btn-shipping">添加</button>
        </td>
    </tr>
    </tbody>
    </table>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
	<div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 货品详情</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>                </div>
            </div>
            <div class="box-content">
            	 <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#item">货品</a></li>
                    <li><a href="#stockup">备货</a></li>
                    <li><a href="#deliver">发货</a></li>
                </ul>
               	<div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="item">
                    	<div class="box">
                     		<table id="cart_table" class="table table-hover responsive">
                                        <thead>
                                            <tr>
                                                <th>货品</th>
                                                <th>型号</th>
                                                <th>增加工艺</th>
                                                <th>库存</th>
                                                <th>门市价</th>
                                                <th>报价</th>
                                                <th>预定数量</th>
                                                <th>成交数量</th>
                                                <th>已发数量</th>
                                                <th>应发数量</th>
                                                <th>合计</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $detail = array();?>
                                             @foreach($order->orderdetails as $orderdetail)
                                             <?php
                                             $detail[$orderdetail->item->code]=$orderdetail->quantity;
                                             ?>
                                             <tr>
                                                <td>{{HTML::image($orderdetail->item->image, $orderdetail->item->code, array('width'=>'80', 'height'=>'80'))}}</td>
                                                <td>{{$orderdetail->item->code}}</td>
                                                <td>{{$orderdetail->craft_description}}</td>
                                                 <td>{{$orderdetail->item->stock}}</td>
                                                 <td>{{$orderdetail->item->price_market}}</td>
                                                 <td>{{$orderdetail->confirm_price}}</td>
                                                 <td>{{$orderdetail->quantity}}</td>
                                                 <td>{{$orderdetail->confirm_quantity}}</td>
                                                  <td>{{$orderdetail->delivery_quantity}}</td>
                                                   <td>{{$orderdetail->confirm_quantity-$orderdetail->delivery_quantity}}</td>
                                             </tr>
                                             @endforeach
                                        </tbody>
                                    </table>
                                </div>
                    </div>
                    <div class="tab-pane" id="stockup">
                       <div class="box">
                            <table class="table table-striped table-bordered responsive">
    <tr>
        <th>型号</th>
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
            if(isset($v[$i]->quantity)){
                $quantity = $v[$i]->quantity;
                $item_count++;
                $quantity_count+=$quantity;
            }
        ?>
        <td>@if(isset($v[$i]->quantity)){{
            $v[$i]->quantity
        }}@endif</td>
        <?php
        }
        ?>
        <td>{{$item_count}}</td>
        <td class="success">{{$quantity_count}}</td>
        <td class="danger">{{$detail[$k]}}</td>
    </tr>
    @endforeach
</table>                    </div>
                    </div>

                     <div class="tab-pane" id="deliver">
                        <div class="box">
                            <table class="table table-striped table-bordered responsive">
    <tr>
        <th>包号</th>
        <th>型号</th>
        <?php
        $list = array();
        $count = 0;

        $orderlist = array();
        foreach ($order->orderdetails as $orderdetail) {
            $orderlist[$orderdetail->item->code] = $orderdetail;
        }

        foreach($order->orderstockpackages as $orderstockpackage) {
            $package_no = $orderstockpackage->package_no;
            foreach ($orderstockpackage->stockpackagedetails as $stockpackagedetail) {
            $list[$package_no][$stockpackagedetail->item][] = $stockpackagedetail;

            if(count($list[$package_no][$stockpackagedetail->item])>$count){
                $count = count($list[$package_no][$stockpackagedetail->item]);
            }
            }
        }

        for($i=1; $i<=$count; $i++){
        ?>
        <th>{{$i}}</th>
        <?php
        }
        $item_count_sum = $quantity_count_sum = $amount = 0;
        $package = count($list);
        ?>
        <th>匹数</th>
        <th>数量</th>
        <th>单价</th>
        <th>金额</th>
    </tr>
    @foreach($list as $k => $j)
        @foreach($j as $t => $v)
    <tr>
        <td>{{$k}}</td>
        <td>{{$t}}</td>
       <?php
        $item_count = $quantity_count = 0;
        for($i=0; $i<$count; $i++){
            if(isset($v[$i]->quantity)){
                $quantity = $v[$i]->quantity;
                $item_count++;
                $quantity_count+=$quantity;
                $item_count_sum++;
                $quantity_count_sum+=$quantity;
            }
        ?>
        <td>@if(isset($v[$i]->quantity)){{
            $v[$i]->quantity
        }}@endif</td>
        <?php
        }
            $amount+= ($orderlist[$t]->confirm_price * $quantity_count);
        ?>
        <td>{{$item_count}}</td>
        <td>{{$quantity_count}}</td>
        <td>{{$orderlist[$t]->confirm_price}}</td>
    </tr>
    @endforeach
    @endforeach
    <tr>
        <td>合计米数</td>
        <td>{{$quantity_count_sum}}</td>
        <td>合计匹数</td>
        <td>{{$item_count_sum}}</td>
        <td>合计包数</td>
        <td>{{$package}}</td>
        <td>合计金额</td>
        <td>{{$amount}}</td>
    </tr>
    
</table>                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#myTab a:first').tab('show');
    $('#myTab a').click(function (e) {
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

    $(".btn-payment").click(function(e){
        $.ajax({
          type: "POST",
          url: "{{URL::to('admin/orders/payment')}}",
          data: {paydate:$("#paydate").val(), payment_method_id:$("#payment_method_id").val(), no:$("#no").val(), amount:$("#amount").val(), memo:$("#memo").val(), order_id:{{$order->id}}},
          dataType: 'html'
        }).done(function(msg){
            //
            $("#payment_table").html(msg);
        });

    });

    $(".btn-shipping").click(function(e){
        $.ajax({
          type: "POST",
          url: "{{URL::to('admin/orders/shipping')}}",
          data: {shipping_date:$("#shipping_date").val(), no:$("#shippingno").val(), carrier:$("#carrier").val(), order_id:{{$order->id}}},
          dataType: 'html'
        }).done(function(msg){
            //
            $("#shipping_table").html(msg);
        });

    });
</script>