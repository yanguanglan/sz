<div class="col-md-12">
                     		<h3 class="text-center">购物车</h3>
                     		
                    <form class="form-horizontal" id="form-addcart" role="form">
               			<div class="col-md-4 form-group">
               			<input class="typeahead form-control" id="typeahead" name="typeahead" type="text" placeholder="请输入花型编号">
               		    </div>
               		    <div class="col-md-2">
               			<button type="button" class="btn btn-primary btn-additem">添加</button>
               			</div>
                    <input type="hidden" id="customer_id" class="form-control" name="customer_id" value="{{$customer_id}}">
                    <input type="hidden" id="item_id" class="form-control" name="item_id" value="">
               		</form>
                 			
                     		<table id="cart_table" class="table table-hover responsive">
                                        <thead>
                                            <tr>
                                            	<th>#</th>
                                                <th>货品</th>
                                                <th>型号</th>
                                                <th>增加工艺</th>
                                                <th>库存</th>
                                                <th>门市价</th>
                                                <th>报价</th>
                                                <th>数量</th>
                                                <th>合计</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@if($mycart)
                                        	<?php $sum = 0;?>
                                        	@foreach($mycart as $cart)
                                            <tr>
                                                <td><button data-id="{{$cart->id}}" class="btn btn-danger btn-remove"><span class="glyphicon glyphicon-remove"></span>删除</button></td>
                                                <td>{{HTML::image($cart->item->image, $cart->item->code, array('width'=>'80', 'height'=>'80'))}}</td>
                                                <td>{{$cart->item->code}}</td>
                                                <td><input data-id="{{$cart->id}}" data-name="craft_description" type="text" class="form-control modify" name="craft_description" id="craft_description" value="{{$cart->craft_description}}"></td>
                                                <td>
                                                	@if($cart->item->stock>=$cart->quantity)
                                                	<span class="label-success label label-default">{{$cart->item->stock}}</span>
                                                	@else
                                                	<span class="label-warning label label-default">{{$cart->item->stock}}</span>
                                                	@endif
                                                </td>
                                                <td><strong class="text-danger">{{$cart->item->price_market}}</strong></td>
                                                <td><input data-id="{{$cart->id}}" data-name="confirm_price" type="text" class="form-control modify" name="confirm_price" id="confirm_price" value="@if($cart->confirm_price!=0.00){{$cart->confirm_price}}@else{{$cart->item->price_market}}@endif"></td>
                                                <td><input data-id="{{$cart->id}}" data-name="quantity" type="text" class="form-control modify" name="quantity" id="quantity" value="{{$cart->quantity}}"></td>
                                                <td class="text-right">
                                                	@if($cart->confirm_price!=0.00)
                                                	{{ $cart->confirm_price*$cart->quantity }}
                                                	@else
                                                	{{ $cart->item->price_market*$cart->quantity }}
                                                	@endif
                                                </td>
                                            </tr>
                                            <?php 
                                            if($cart->confirm_price!=0.00){
                                            	$sum+= $cart->confirm_price*$cart->quantity;
                                            }else{
                                            	$sum+=$cart->item->price_market*$cart->quantity;
                                            }
                                             ?>
                                            @endforeach
                                           
                                            <tr class="success">
                                                <td colspan="8" class="text-right">总计</td>
                                                <td class="text-right">{{$sum}}</td>
                                            </tr>
                                            @else
                                             <tr class="success">
                                                <td colspan="8" class="text-right">总计</td>
                                                <td class="text-right">0.00</td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                  
                                     <form name="checkout" id="checkout" action="{{URL::to('admin/carts/checkout')}}" method="POST">
                                       <input type="hidden" id="customer" class="form-control" name="customer" value="{{$customer_id}}">
                                      <button type="submit" class="btn btn-primary btn-lg btn-block">下单</button>
                                    </form>

                                  </div>
<script>
//FirstName Search Engine
      var firstNameTypeahead = new Bloodhound({
        datumTokenizer: function (d) {
            return Bloodhound.tokenizers.whitespace(d.value);
        },
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: '{{URL::to("admin/carts/queryitem?code=%QUERY")}}',
           /* filter: function ( response ) {

                return $.map(response.people, function (object) {
                    return {
                        value: object.firstname + " " + object.lastname + " - Student ID: " + object.externaluuid,
                        personID: object.id
                    };
                });*/
            //}
        }
      });
      firstNameTypeahead.initialize();

      //instantiate the typeahead UI for First Name Lookup
      $('#form-addcart .typeahead').typeahead(null, {
        minLength: 3,
        displayKey: 'code',
        source: firstNameTypeahead.ttAdapter()
      }).on('typeahead:selected', function (object, datum) { 
        $("#item_id").val(datum.id);
      });
</script>