@extends('layouts.cpanel')

@section('title')
	@parent - 购物车
@stop

@section('breadcrumb')
	@parent
	    <li>
			门市
	    </li>
		<li>
			购物车
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 门市购物车</h2>
                <div class="box-icon" data-toggle="tooltip" data-original-title="添加登记客户">
              <a href="{{ URL::to('admin/carts/addcustomer') }}" data-target="#CartAddCustomer-myModal" data-toggle="modal"  class="btn btn-round btn-primary btn-lg"><i class="glyphicon glyphicon-plus-sign"></i></a>
                    </div>
            </div>
            <div class="box-content">
              <div class="row">
              <div class="col-md-12" id="customer_table">
               	 <h3 class="text-center">登记客户</h3>
					<!--table-->
                 {{ Datatable::table()
            ->addColumn('姓名', '手机', '地址', '操作')
                   // these are the column headings to be shown
            ->setUrl(route('api.carts.customers'))   // this is the route where data will be retrieved
            ->render() }}
                  </div>
                </div><!--/row-->
            <div id="carts_table" class="row">       
            </div>
                     <!--/row-->    
            </div><!--/box-content-->
        </div><!--/box-inner-->
    </div>
    <!--/span-->

</div><!--/row-->
<script>
$(function() {
  //更新购物车
  $('#customer_table').on('click', 'button', function(){
    $("#carts_table").load("{{ URL::to('admin/carts/mycart')}}", {"customer_id" : $(this).data("customerid")});
  });

  //添加产品
  $('#carts_table').on('click', '.btn-additem', function(){
    $.post("{{ URL::to('admin/carts/additem')}}",{"item_id":$('#item_id').val(), "customer_id":$('#customer_id').val()},
      function(data){
        if(data.msg == '1') {
          $("#carts_table").load("{{ URL::to('admin/carts/mycart')}}", {"customer_id" : $('#customer_id').val()});
        }
      },
      'json');
  });
  //删除产品
  $('#carts_table').on('click', '.btn-remove', function(){
    $.post("{{ URL::to('admin/carts/removeitem')}}",{"id":$(this).data("id")},
      function(data){
        if(data.msg == '1') {
          $("#carts_table").load("{{ URL::to('admin/carts/mycart')}}", {"customer_id" : $('#customer_id').val()});
        }
      },
      'json');
  });
  
  //更新数量
  $("#carts_table").on('change', 'input.modify', function(){
    if($(this).val()<1) {
      $(this).val(1);
    }
    $.post("{{ URL::to('admin/carts/mycartedit')}}",{"id":$(this).data("id"), "key":$(this).data('name'), "value":$(this).val()},
      function(data){
        if(data.msg == '1') {
          $("#carts_table").load("{{ URL::to('admin/carts/mycart')}}", {"customer_id" : $('#customer_id').val()});
        }
      },
      'json');
  });

});
</script>
@stop