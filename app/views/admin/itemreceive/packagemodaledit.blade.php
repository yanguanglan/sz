<form name="itemReceivePackageEdit-myModal-form" id="itemReceivePackageEdit-myModal-form" method="POST" action="{{URL::to('admin/itemreceive/packagemodaledit?supplier_id='.$supplier->id)}}">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3>抄包录入</h3>
</div>
<div class="modal-body">
                <!-- form -->
                     <div class="form-group">
                        <div>
                        <label for="">供应商</label>
                        	{{$supplier->name}}  
                        </div>
                        </div>

                <!-- form table -->
                 <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th class="text-center">包号</th>
                            <th class="text-center">数量</th>
                            <th class="text-center">
                                <a id="addRow" class="btn btn-primary" href="#">
                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                新增
                                </a></th>
                        </tr>
                        </thead>
                        <tbody id="tableContent">
                     <tr>

                            <td class="text-center">

      						<input class="form-control text-center" name="package_no[]" type="text" placeholder="包号">

                            </td>

                            <td class="text-center">
                               <input class="form-control text-center" name="item_count[]" type="text" placeholder="数量">
                            </td>
                            <td class="text-center">
                                <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
                            </td>
                        </tr>

                       <tr>

                            <td class="text-center">

      						<input class="form-control text-center" name="package_no[]" type="text" placeholder="包号">

                            </td>

                            <td class="text-center">
                               <input class="form-control text-center" name="item_count[]" type="text" placeholder="数量">
                            </td>
                            <td class="text-center">
                                <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
                            </td>
                        </tr>

                        <tr>

                            <td class="text-center">

      						<input class="form-control text-center" name="package_no[]" type="text" placeholder="包号">

                            </td>

                            <td class="text-center">
                               <input class="form-control text-center" name="item_count[]" type="text" placeholder="数量">
                            </td>
                            <td class="text-center">
                                <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
                            </td>
                        </tr>

                        <tr>

                            <td class="text-center">

      						<input class="form-control text-center" name="package_no[]" type="text" placeholder="包号">

                            </td>

                            <td class="text-center">
                               <input class="form-control text-center" name="item_count[]" type="text" placeholder="数量">
                            </td>
                            <td class="text-center">
                                <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
                            </td>
                        </tr>

                        <tr>

                            <td class="text-center">

      						<input class="form-control text-center" name="package_no[]" type="text" placeholder="包号">

                            </td>

                            <td class="text-center">
                               <input class="form-control text-center" name="item_count[]" type="text" placeholder="数量">
                            </td>
                            <td class="text-center">
                                <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
                            </td>
                        </tr>

                        </tbody>

                    </table>
<!-- /body -->
</div>
<div class="modal-footer">
<button class="btn btn-default" data-dismiss="modal">关闭</button>
<button type="submit" class="btn btn-primary" >提交</button>
</div>
</form>
<script>
$(function() {
	//更新合计

	//跟新添加
	var i=5;
    $("#addRow").click(function(){
    //新增复制最后一个tr
    if(i>0) {
       $('#tableContent').append($('#tableContent').find("tr").last().clone());	
       var $this = $('#tableContent').find("tr").last().find("td:eq(0) > input");
       //if($this.val()!='') {
           $this.val(i+1);
       // }
    } else {
     	$('#tableContent').append('<tr class="deleteRow"><td class="text-center"><input class="form-control text-center" name="package_no[]" type="text" placeholder="包号" value="1"></td><td class="text-center"><input class="form-control text-center" name="item_count[]" type="text" placeholder="数量"></td><td class="text-center"><a class="btn btn-danger" href="#"><i class="glyphicon glyphicon-trash icon-white"></i>删除</a></td></tr>');
    }
	     //新增后解除复制绑定
	     $('#tableContent').off('blur', 'input');

     i++;

     });

    //删除
	$('#tableContent').on('click', 'a', function(){
	    $(this).parent().parent().remove();
	    i--;
	 });
});
</script>

