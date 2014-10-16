@extends('layouts.cpanel')

@section('title')
	@parent - 新增客户
@stop

@section('breadcrumb')
	@parent
	    <li>
			客户
	    </li>
		<li>
			新增客户
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 新增客户</h2>
            </div>
            <div class="box-content">
                    	<form role="form" class="form-horizontal" name="customers" method="post" action="{{URL::route('admin.customers.store')}}">
                    	<div class="box-content">
                    		 <!--/row-->
                    	<div class="row">
                       	<div class="col-sm-6">
                    	  <div class="form-group">
						    <label for="name" class="col-sm-2 control-label">姓名</label>
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
						    <label for="group_id" class="col-sm-2 control-label">客户等级</label>
						    <div class="col-sm-10">
						    {{Form::select('group_id', 
						    	CustomerGroup::lists('name', 'id'),
						    	null,
						    	array('class'=>'form-control')
						    )}}
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
						    <label for="street" class="col-sm-2 control-label">地区</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="street" id="street" placeholder="">
						</div>
						  </div>
						</div>
 							<div class="col-sm-6">
						  <div class="form-group">
						    <label for="address" class="col-sm-2 control-label">详细地址</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="address" id="address" placeholder="">
						</div>
						  </div>
						</div>
						
					</div><!--/row-->

                    	</div><!--box-content-->
                          	<button type="submit" class="btn-primary btn-lg btn-block">提交</button>
               			</form>
                             </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
@stop