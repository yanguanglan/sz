<form name="itemReceivePackage-myModal-form" id="itemReceivePackage-myModal-form" method="POST" action="{{URL::to('admin/itemreceive/packagemodal?id='.Input::get('id'))}}">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3>预录入</h3>
</div>
<div class="modal-body">
                <!-- form -->
                     <div class="form-group">
                        <div class="col-sm-6">
                        <label for="">供应商</label>
                            {{$itemReceive->supplier->name}}
                        </div>
                        <div class="col-sm-6">
                            <label for="">包号</label>
                            {{$itemReceive->package_count+1}}
                            </div> 
                      </div>
                <!-- table -->
                <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th class="text-center">型号</th>
                            <th class="text-center">匹数</th>
                            <th class="text-center">米数</th>
                        </tr>
                        </thead>
                        <tbody id="amountTable">

                        </tbody>

                        <tfooter>
                        <tr class="success">
                            <th class="text-center center" colspan="2">合计</th>
                            <th id="itemTotal" class="text-center center">0</th>
                            <th id="quantityTotal" class="text-center center">0</th>
                        </tr>
                        </tfooter>
               </table>

                <!-- form table -->
                 <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th class="text-center">型号</th>
                            <th class="text-center">数量</th>
                            <th class="text-center">缸号</th>
                            <th class="text-center">单价</th>
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

      						<input class="form-control text-center" name="item[]" type="text" placeholder="型号">

                            </td>

                            <td class="text-center">
                               <input class="form-control text-center" name="quantity[]" type="text" placeholder="数量">
                            </td>
                            <td class="text-center">
                                <input class="form-control text-center" name="batch[]" type="text" placeholder="缸号">
                            </td>
                            
                             <td class="text-center">
                                <input class="form-control text-center" name="price[]" type="text" placeholder="单价">
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

      						<input class="form-control text-center" name="item[]" type="text" placeholder="型号">

                            </td>

                            <td class="text-center">
                               <input class="form-control text-center" name="quantity[]" type="text" placeholder="数量">
                            </td>
                            <td class="text-center">
                                <input class="form-control text-center" name="batch[]" type="text" placeholder="缸号">
                            </td>
                           
                             <td class="text-center">
                                <input class="form-control text-center" name="price[]" type="text" placeholder="单价">
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

      						<input class="form-control text-center" name="item[]" type="text" placeholder="型号">

                            </td>

                            <td class="text-center">
                               <input class="form-control text-center" name="quantity[]" type="text" placeholder="数量">
                            </td>
                            <td class="text-center">
                                <input class="form-control text-center" name="batch[]" type="text" placeholder="缸号">
                            </td>
                            
                             <td class="text-center">
                                <input class="form-control text-center" name="price[]" type="text" placeholder="单价">
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

      						<input class="form-control text-center" name="item[]" type="text" placeholder="型号">

                            </td>

                            <td class="text-center">
                               <input class="form-control text-center" name="quantity[]" type="text" placeholder="数量">
                            </td>
                            <td class="text-center">
                                <input class="form-control text-center" name="batch[]" type="text" placeholder="缸号">
                            </td>
                           
                             <td class="text-center">
                                <input class="form-control text-center" name="price[]" type="text" placeholder="单价">
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

      						<input class="form-control text-center" name="item[]" type="text" placeholder="型号">

                            </td>

                            <td class="text-center">
                               <input class="form-control text-center" name="quantity[]" type="text" placeholder="数量">
                            </td>
                            <td class="text-center">
                                <input class="form-control text-center" name="batch[]" type="text" placeholder="缸号">
                            </td>
                            
                             <td class="text-center">
                                <input class="form-control text-center" name="price[]" type="text" placeholder="单价">
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
                    <a id="amountUpdate" class="btn btn-info btn-lg btn-block">合计</a>
<!-- /body -->
</div>
<div class="modal-footer">
<button class="btn btn-default" data-dismiss="modal">关闭</button>
<button type="submit" class="btn btn-primary" >提交</button>
<input type="hidden" name="package_no" value="{{$itemReceive->package_count+1}}">
<input type="hidden" name="supplier_id" value="{{$itemReceive->supplier->id}}">
</div>
</form>
<script>
$(function() {
	//更新合计
	$("#amountUpdate").click(function(){
		var data = {};
		$('#tableContent > tr').each(function(){
			//型号
			var item = $(this).find('td').eq(0).find("input").val();
			//米数
			var quantity = parseInt($(this).find('td').eq(1).find("input").val());
			
			if(item!="") {
				if(item in data) {
				//存在
					data[item].quantity = data[item].quantity + quantity;
					data[item].items = data[item].items + 1;
				} else {
				//不存在
					data[item] = {
						"quantity" : quantity,
						"items" : 1
					};
				}
			}
		});
		console.log(data);
		//渲染表格amountTable
		var rows = Object.keys(data).length;
		var table = "";
		var first = true;
		var itemTotal = 0;
		var quantityTotal = 0;
		for (var row in data) {
			if(first) {
			table += '<tr><td class="text-center" rowspan="'+ rows +'">小计</td><td class="text-center">'+ row +'</td><td class="text-center">'+ data[row].items +'</td><td class="text-center">'+ data[row].quantity +'</td></tr>';
				first = false;
			} else {
				table += '<tr><td class="text-center">'+ row +'</td><td class="text-center">'+ data[row].items +'</td><td class="text-center">'+ data[row].quantity +'</td></tr>';
			}

			itemTotal += data[row].items;
			quantityTotal += data[row].quantity;
		}

		//插入内容
		$("#amountTable").html(table);
		$("#itemTotal").text(itemTotal);
		$("#quantityTotal").text(quantityTotal);
	});

	//跟新添加
	var i=5;
    $("#addRow").click(function(){
    //新增复制最后一个tr
    if(i>0) {
       $('#tableContent').append($('#tableContent').find("tr").last().clone());	
    } else {
     	$('#tableContent').append('<tr class="deleteRow"><td class="text-center"><input class="form-control text-center" name="item[]" type="text" placeholder="型号"></td><td class="text-center"><input class="form-control text-center" name="quantity[]" type="text" placeholder="数量"></td><td class="text-center"><input class="form-control text-center" name="batch[]" type="text" placeholder="缸号"></td><td class="text-center"><td class="text-center"><input class="form-control text-center" name="price[]" type="text" placeholder="单价"></td><td class="text-center"><a class="btn btn-danger" href="#"><i class="glyphicon glyphicon-trash icon-white"></i>删除</a></td></tr>');
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

	//复制
	$('#tableContent').on('focus', 'input', function(){
	    var rowIndex = $(this).parent().index();
	    $(this).val($(this).closest("tr").prev().find("td").eq(rowIndex).find('input').val());
	});

});
</script>

