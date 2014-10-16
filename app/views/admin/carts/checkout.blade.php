@extends('layouts.cpanel')

@section('title')
	@parent - 下订单
@stop

@section('breadcrumb')
	@parent
	    <li>
			门市
	    </li>
		<li>
			下订单
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 下订单</h2>
            </div>
            <div class="box-content">
               	<div class="row">
               	<div class="col-md-12">
               	<h4>选择收货地址</h4>
               <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                	<th>#</th>
                                                    <th>姓名</th>
                                                    <th>手机</th>  
                                                    <th>固话</th> 
                                                    <th>地址</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                	<td><input name="address" type="radio" checked="checked"></td>
                                                    <td>蓝燕光</td>
                                                    <td>13588100379</td>
                                                    <td>057185505589</td>
                                                    <td>浙江省杭州市西湖区白马尊邸13#2-1401
                                                    </td>                         
                                                </tr>
                                                 <tr>
                                                 	<td><label><input name="address" type="radio">新增地址</label></td>
                                                    <td><input type="text" placehoder="姓名"></td>
                                                    <td><input type="text" placehoder="手机"></td>
                                                    <td><input type="text" placehoder="固话"></td>
                                                    <td><input type="text" placehoder="地址"></td>                         
                                                </tr>
                                            </tbody>
                                        </table>

               	 <h4>确认订单信息</h4>
                 <div class="row">
                                    <div class="col-md-12" id="unseen">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Item</th>
                                                    <th class="hidden-phone">Description</th>
                                                    <th class="">Unit Cost</th>
                                                    <th class="">Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>LCD Monitor</td>
                                                    <td class="hidden-phone">20 inch Philips LCD Black color monitor</td>
                                                    <td class="">$ 1000</td>
                                                    <td class="">2</td>
                                                    <td>$ 2000</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Laptop</td>
                                                    <td class="hidden-phone">Apple Mac book pro 15” Retina Display. 2.8 GHz Processor,8 GB Ram</td>
                                                    <td class="">$1750</td>
                                                    <td class="">1</td>
                                                    <td>$1750</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Mouse</td>
                                                    <td class="hidden-phone">Apple Magic Mouse</td>
                                                    <td class="">$90</td>
                                                    <td class="">3</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Personal Computer</td>
                                                    <td class="hidden-phone">iMac 21 inch slim body. 1.7 GHz, 8 GB Ram</td>
                                                    <td class="">$1200</td>
                                                    <td class="">2</td>
                                                    <td>$2400</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Printer</td>
                                                    <td class="hidden-phone">Epson Color Jet printer </td>
                                                    <td class="">$200</td>
                                                    <td class="">2</td>
                                                    <td>$400</td>
                                                </tr>
                                                <tr class="success">
                                                    <td colspan="5">Total Products</td>
                                                    <td>$400</td>
                                                </tr>
                                                <tr class="warning">
                                                    <td colspan="5">Shippings</td>
                                                    <td>$400</td>
                                                </tr>
                                                 <tr class="danger">
                                                    <td colspan="5">Total</td>
                                                    <td>$400</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                 <form>
                                    	<button type="submit" class="btn btn-primary btn-lg btn-block">提交订单</button>
                                    </form>
                            </div><!--col-md-12-->
               	</div>	
            </div><!--/box-content-->
        </div><!--/box-inner-->
    </div>
    <!--/span-->

</div><!--/row-->
@stop