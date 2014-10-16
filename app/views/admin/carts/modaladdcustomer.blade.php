<form class="form-horizontal" role="form" name="CartAddCustomer-myModal-form" id="CartAddCustomer-myModal-form" method="POST" action="{{URL::to('admin/carts/addcustomer')}}">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3>登记客户</h3>
</div>
<div class="modal-body">
<div class="box-content">
  <div class="form-group">
  	    <label for="name" class="col-sm-2 control-label">姓名</label>
        <div class="col-xs-10">
        	<input class="form-control" name="name" type="text">
    	</div>
   </div>
  <div class="form-group">
  	<label for="mobile" class="col-sm-2 control-label">手机</label>
  	<div class="col-xs-10">
    <input class="form-control" name="mobile" type="text">
	</div>
  </div>

 <div class="form-group">
  	<label for="address" class="col-sm-2 control-label">地址</label>
  	<div class="col-xs-10">
    <input class="form-control" name="address" type="text">
	</div>
  </div>

</div>
<!-- /body -->
</div>
<div class="modal-footer">
<button class="btn btn-default" data-dismiss="modal">关闭</button>
<button type="submit" class="btn btn-primary" >提交</button>
</div>
</form>
