<form name="itemReceive-myModal-form" id="itemReceive-myModal-form" 
@if (Input::get('type')=='add')
method="POST" action="{{URL::to('admin/itemreceive/modal')}}"
@else
method="GET" action="{{URL::to('admin/itemreceive/modaledit')}}"
@endif
">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3>预录入</h3>
</div>
<div class="modal-body">
<div class="box-content">
<div class="control-group">
<div class="controls">
	 <select id="selectError"  name="supplier_id" data-placeholder="选择供应商..." data-rel="chosen" style="width:350px;" tabindex="1">
        <option value=""></option>
    	@foreach($suppliers as $supplier)
    		<option value="{{$supplier->id}}">{{$supplier->name}}</option>
    	@endforeach
    </select>
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
