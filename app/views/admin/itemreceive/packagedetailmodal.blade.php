<form class="form-horizontal" role="form" name="itemReceivePackageDetail-myModal-form" id="itemReceivePackageDetail-myModal-form" method="POST" action="{{URL::to('admin/itemreceive/packagedetailmodal')}}">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3>拆包</h3>
</div>
<div class="modal-body">
<div class="box-content">
  <div class="form-group">
  	<label for="supplier_id" class="col-sm-2 control-label">供应商</label>
  	<div class="col-sm-10">
     <select id="selectError"  name="supplier_id" data-placeholder="选择供应商..." data-rel="chosen" style="width:252px;" tabindex="1">
        <option value=""></option>
    	@foreach($suppliers as $supplier)
    		<option value="{{$supplier->id}}">{{$supplier->name}}</option>
    	@endforeach
    </select>
</div>
  </div>
  <div class="form-group">
  	    <label for="package_received_date" class="col-sm-2 control-label">日期</label>
        <div class="col-xs-6">
        	<input class="form-control text-center" name="received_date" type="date">
    	</div>
   </div>
  <div class="form-group">
  	<label for="package_no" class="col-sm-2 control-label">包号</label>
  	<div class="col-xs-6">
    <input class="form-control text-center" name="package_no" type="text">
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
