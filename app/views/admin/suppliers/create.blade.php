@extends('layouts.cpanel')

@section('title')
	@parent - 新增供应商
@stop

@section('breadcrumb')
	@parent
	    <li>
			供应商
	    </li>
		<li>
			新增供应商
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 新增供应商</h2>
            </div>
            <div class="box-content">
                <ul class="nav nav-tabs" id="myTab">
                    <li class=""><a href="#suppliers1">厂家</a></li>
                    <li class="active"><a href="#suppliers2">贸易商</a></li>
                    <li class="active"><a href="#suppliers3">委托加工</a></li>   
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane" id="suppliers1">
                    	<form role="form" class="form-horizontal" name="suppliers1" method="post" action="{{URL::route('admin.suppliers.store')}}">
                    	<div class="box-content">
                    		 <!--/row-->
                    	<div class="row">
                       	<div class="col-sm-6">
                    	  <div class="form-group">
						    <label for="name" class="col-sm-2 control-label">名称</label>
						    <div class="col-sm-10">
						    <input type="text" class="
						    form-control" name="name" id="name" placeholder="">
							</div>
						  </div>
						</div>
						<div class="col-sm-6">
						  <div class="form-group">
						    <label for="mobile" class="col-sm-2 control-label">手机</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="">
						</div>
						  </div>
						</div>
						</div>
						 <!--/row-->
						<div class="row">
                       	<div class="col-sm-6">
						   <div class="form-group">
						    <label for="telephone" class="col-sm-2 control-label">固话</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="">
						</div>
						  </div>
						</div>
						  <div class="col-sm-6">
						  <div class="form-group">
						    <label for="mail" class="col-sm-2 control-label">邮箱</label>
						    <div class="col-sm-10">
						    <input type="email" class="form-control" name="mail" id="mail" placeholder="">
						</div>
						  </div>

						</div>
						</div>
						 <!--/row-->

						 <div class="row">
                       	<div class="col-sm-6">
						  <div class="form-group">
						    <label for="qq" class="col-sm-2 control-label">QQ</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="qq" id="qq" placeholder="">
						</div>
						  </div>
						</div>

						<div class="col-sm-6">
						  <div class="form-group">
						    <label for="wechat" class="col-sm-2 control-label">微信</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="wechat" id="wechat" placeholder="">
						</div>
						  </div>
						</div>
					</div><!--/row-->


 					<div class="row">
                       	<div class="col-sm-6">
						  <div class="form-group">
						    <label for="url" class="col-sm-2 control-label">网址</label>
						    <div class="col-sm-10">
						    <input type="url" class="form-control" name="url" id="url" placeholder="">
						</div>
						  </div>
						</div>
						<div class="col-sm-6">
						  <div class="form-group">
						    <label for="street" class="col-sm-2 control-label">地区</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="street" id="street" placeholder="">
						</div>
						  </div>
						</div>
					</div><!--/row-->

					<div class="row">
                       	<div class="col-sm-6">
						  <div class="form-group">
						    <label for="address" class="col-sm-2 control-label">详细地址</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="address" id="address" placeholder="">
						</div>
						  </div>
						</div>
						<div class="col-sm-6">
						  <div class="form-group">
						    <label for="postcode" class="col-sm-2 control-label">邮编</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="postcode" id="postcode" placeholder="">
						</div>
						  </div>
						 </div>
						 </div><!--/row-->

						 <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
						    <label for="acreage" class="col-sm-2 control-label">厂房面积</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="acreage" id="acreage" placeholder="">
						</div>
						  </div>
						</div>
						  <div class="col-sm-6">
						    <div class="form-group">
						    <label for="company" class="col-sm-2 control-label">厂房地址</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="company" id="company" placeholder="">
							</div>
						  </div>
						  </div>
						 </div><!--/row-->

						 <div class="row">
                       	<div class="col-sm-6">
						   <div class="form-group">
						    <label for="amount" class="col-sm-2 control-label">机器数量</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="amount" id="amount" placeholder="">
						</div>
						  </div>
						</div>
						  
						  <div class="col-sm-6">
 							<div class="form-group">
						    <label for="output" class="col-sm-2 control-label">年产量</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="output" id="output" placeholder="">
						</div>
						  </div>
						    </div>
						 </div><!--/row-->

						  <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
						    <label for="bank" class="col-sm-2 control-label">银行名称</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="bank" id="bank" placeholder="">
						</div>
						  </div>
						</div>
						  <div class="col-sm-6">
						    <div class="form-group">
						    <label for="bank_address" class="col-sm-2 control-label">开户分行</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="bank_address" id="bank_address" placeholder="">
							</div>
						  </div>
						  </div>
						 </div><!--/row-->

						 <div class="row">
                       	<div class="col-sm-6">
						   <div class="form-group">
						    <label for="account_no" class="col-sm-2 control-label">银行卡号</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="account_no" id="account_no" placeholder="">
						</div>
						  </div>
						</div>
						  
						  <div class="col-sm-6">
 							<div class="form-group">
						    <label for="account_name" class="col-sm-2 control-label">持卡人</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="account_name" id="account_name" placeholder="">
						</div>
						  </div>
						    </div>
						 </div><!--/row-->

                    	</div><!--box-content-->
                    	<input class="form-control text-center" name="audit_status" type="hidden" value="2">
                    	<input class="form-control text-center" name="type" type="hidden" value="0">
                    	<button type="submit" class="btn-primary btn-lg btn-block">提交</button>
               			</form>
                    </div><!--suppliers1-->
                    <div class="tab-pane active" id="suppliers2">
                    	<form role="form" class="form-horizontal" name="suppliers2" method="post" action="{{URL::route('admin.suppliers.store')}}">
                    	<div class="box-content">
                    		 <!--/row-->
                    	<div class="row">
                       	<div class="col-sm-6">
                    	  <div class="form-group">
						    <label for="name" class="col-sm-2 control-label">名称</label>
						    <div class="col-sm-10">
						    <input type="text" class="
						    form-control" name="name" id="name" placeholder="">
							</div>
						  </div>
						</div>
						<div class="col-sm-6">
						  <div class="form-group">
						    <label for="mobile" class="col-sm-2 control-label">手机</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="">
						</div>
						  </div>
						</div>
						</div>
						 <!--/row-->
						<div class="row">
                       	<div class="col-sm-6">
						   <div class="form-group">
						    <label for="telephone" class="col-sm-2 control-label">固话</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="">
						</div>
						  </div>
						</div>
						  <div class="col-sm-6">
						  <div class="form-group">
						    <label for="mail" class="col-sm-2 control-label">邮箱</label>
						    <div class="col-sm-10">
						    <input type="email" class="form-control" name="mail" id="mail" placeholder="">
						</div>
						  </div>

						</div>
						</div>
						 <!--/row-->

						 <div class="row">
                       	<div class="col-sm-6">
						  <div class="form-group">
						    <label for="qq" class="col-sm-2 control-label">QQ</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="qq" id="qq" placeholder="">
						</div>
						  </div>
						</div>

						<div class="col-sm-6">
						  <div class="form-group">
						    <label for="wechat" class="col-sm-2 control-label">微信</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="wechat" id="wechat" placeholder="">
						</div>
						  </div>
						</div>
					</div><!--/row-->


 					<div class="row">
                       	<div class="col-sm-6">
						  <div class="form-group">
						    <label for="url" class="col-sm-2 control-label">网址</label>
						    <div class="col-sm-10">
						    <input type="url" class="form-control" name="url" id="url" placeholder="">
						</div>
						  </div>
						</div>
						<div class="col-sm-6">
						  <div class="form-group">
						    <label for="street" class="col-sm-2 control-label">地区</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="street" id="street" placeholder="">
						</div>
						  </div>
						</div>
					</div><!--/row-->

					<div class="row">
                       	<div class="col-sm-6">
						  <div class="form-group">
						    <label for="address" class="col-sm-2 control-label">详细地址</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="address" id="address" placeholder="">
						</div>
						  </div>
						</div>
						<div class="col-sm-6">
						  <div class="form-group">
						    <label for="postcode" class="col-sm-2 control-label">邮编</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="postcode" id="postcode" placeholder="">
						</div>
						  </div>
						 </div>
						 </div><!--/row-->

						 <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
						    <label for="acreage" class="col-sm-2 control-label">门市部/公司面积</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="acreage" id="acreage" placeholder="">
						</div>
						  </div>
						</div>
						  <div class="col-sm-6">
						    <div class="form-group">
						    <label for="company" class="col-sm-2 control-label">门市部/公司地址</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="company" id="company" placeholder="">
							</div>
						  </div>
						  </div>
						 </div><!--/row-->

						 <div class="row">
                       	<div class="col-sm-6">
						   <div class="form-group">
						    <label for="amount" class="col-sm-2 control-label">产品数量</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="amount" id="amount" placeholder="">
						</div>
						  </div>
						</div>
						  
						  <div class="col-sm-6">
 							<div class="form-group">
						    <label for="output" class="col-sm-2 control-label">年贸易量</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="output" id="output" placeholder="">
						</div>
						  </div>
						    </div>
						 </div><!--/row-->

						  <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
						    <label for="bank" class="col-sm-2 control-label">银行名称</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="bank" id="bank" placeholder="">
						</div>
						  </div>
						</div>
						  <div class="col-sm-6">
						    <div class="form-group">
						    <label for="bank_address" class="col-sm-2 control-label">开户分行</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="bank_address" id="bank_address" placeholder="">
							</div>
						  </div>
						  </div>
						 </div><!--/row-->

						 <div class="row">
                       	<div class="col-sm-6">
						   <div class="form-group">
						    <label for="account_no" class="col-sm-2 control-label">银行卡号</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="account_no" id="account_no" placeholder="">
						</div>
						  </div>
						</div>
						  
						  <div class="col-sm-6">
 							<div class="form-group">
						    <label for="account_name" class="col-sm-2 control-label">持卡人</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="account_name" id="account_name" placeholder="">
						</div>
						  </div>
						    </div>
						 </div><!--/row-->

                    	</div><!--box-content-->
                    	<input class="form-control text-center" name="audit_status" type="hidden" value="2">
                    	<input class="form-control text-center" name="type" type="hidden" value="1">
                    	<button type="submit" class="btn-primary btn-lg btn-block">提交</button>
               			</form>
                    </div><!--suppliers2-->	

                    <div class="tab-pane active" id="suppliers3">
                    	<form role="form" class="form-horizontal" name="suppliers3" method="post" action="{{URL::route('admin.suppliers.store')}}">
                    	<div class="box-content">
                    		 <!--/row-->
                    	<div class="row">
                       	<div class="col-sm-6">
                    	  <div class="form-group">
						    <label for="name" class="col-sm-2 control-label">名称</label>
						    <div class="col-sm-10">
						    <input type="text" class="
						    form-control" name="name" id="name" placeholder="">
							</div>
						  </div>
						</div>
						<div class="col-sm-6">
						  <div class="form-group">
						    <label for="mobile" class="col-sm-2 control-label">手机</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="">
						</div>
						  </div>
						</div>
						</div>
						 <!--/row-->
						<div class="row">
                       	<div class="col-sm-6">
						   <div class="form-group">
						    <label for="telephone" class="col-sm-2 control-label">固话</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="">
						</div>
						  </div>
						</div>
						  <div class="col-sm-6">
						  <div class="form-group">
						    <label for="mail" class="col-sm-2 control-label">邮箱</label>
						    <div class="col-sm-10">
						    <input type="email" class="form-control" name="mail" id="mail" placeholder="">
						</div>
						  </div>

						</div>
						</div>
						 <!--/row-->

						 <div class="row">
                       	<div class="col-sm-6">
						  <div class="form-group">
						    <label for="qq" class="col-sm-2 control-label">QQ</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="qq" id="qq" placeholder="">
						</div>
						  </div>
						</div>

						<div class="col-sm-6">
						  <div class="form-group">
						    <label for="wechat" class="col-sm-2 control-label">微信</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="wechat" id="wechat" placeholder="">
						</div>
						  </div>
						</div>
					</div><!--/row-->


 					<div class="row">
                       	<div class="col-sm-6">
						  <div class="form-group">
						    <label for="url" class="col-sm-2 control-label">网址</label>
						    <div class="col-sm-10">
						    <input type="url" class="form-control" name="url" id="url" placeholder="">
						</div>
						  </div>
						</div>
						<div class="col-sm-6">
						  <div class="form-group">
						    <label for="street" class="col-sm-2 control-label">地区</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="street" id="street" placeholder="">
						</div>
						  </div>
						</div>
					</div><!--/row-->

					<div class="row">
                       	<div class="col-sm-6">
						  <div class="form-group">
						    <label for="address" class="col-sm-2 control-label">详细地址</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="address" id="address" placeholder="">
						</div>
						  </div>
						</div>
						<div class="col-sm-6">
						  <div class="form-group">
						    <label for="postcode" class="col-sm-2 control-label">邮编</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="postcode" id="postcode" placeholder="">
						</div>
						  </div>
						 </div>
						 </div><!--/row-->

						 <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
						    <label for="acreage" class="col-sm-2 control-label">门市部/公司面积</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="acreage" id="acreage" placeholder="">
						</div>
						  </div>
						</div>
						  <div class="col-sm-6">
						    <div class="form-group">
						    <label for="company" class="col-sm-2 control-label">门市部/公司地址</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="company" id="company" placeholder="">
							</div>
						  </div>
						  </div>
						 </div><!--/row-->

						 <div class="row">
                       	<div class="col-sm-6">
						   <div class="form-group">
						    <label for="amount" class="col-sm-2 control-label">产品数量</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="amount" id="amount" placeholder="">
						</div>
						  </div>
						</div>
						  
						  <div class="col-sm-6">
 							<div class="form-group">
						    <label for="output" class="col-sm-2 control-label">年委托量</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="output" id="output" placeholder="">
						</div>
						  </div>
						    </div>
						 </div><!--/row-->

						 <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
						    <label for="bank" class="col-sm-2 control-label">银行名称</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="bank" id="bank" placeholder="">
						</div>
						  </div>
						</div>
						  <div class="col-sm-6">
						    <div class="form-group">
						    <label for="bank_address" class="col-sm-2 control-label">开户分行</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="bank_address" id="bank_address" placeholder="">
							</div>
						  </div>
						  </div>
						 </div><!--/row-->

						 <div class="row">
                       	<div class="col-sm-6">
						   <div class="form-group">
						    <label for="account_no" class="col-sm-2 control-label">银行卡号</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="account_no" id="account_no" placeholder="">
						</div>
						  </div>
						</div>
						  
						  <div class="col-sm-6">
 							<div class="form-group">
						    <label for="account_name" class="col-sm-2 control-label">持卡人</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="account_name" id="account_name" placeholder="">
						</div>
						  </div>
						    </div>
						 </div><!--/row-->

                    	</div><!--box-content-->
                    	<input class="form-control text-center" name="audit_status" type="hidden" value="2">
                    	<input class="form-control text-center" name="type" type="hidden" value="2">
                    	<button type="submit" class="btn-primary btn-lg btn-block">提交</button>
               			</form>
                    </div><!--suppliers3-->	
                </div>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
@stop