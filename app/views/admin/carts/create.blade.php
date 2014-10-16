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
               	 <h3 class="text-center">登记客户</h3>
					<!--table-->
                 {{ Datatable::table()
            ->addColumn('姓名', '手机', '地址', '操作')
                   // these are the column headings to be shown
            ->setUrl(route('api.carts.customers'))   // this is the route where data will be retrieved
            ->render() }}
                    <!--/row-->
                    <!-- <div class="row">
                     	<div class="col-md-12">
                     		<h4>购物车</h4>
                     		
                     		<form class="form-horizontal" role="form">
               			<div class="col-md-4 form-group">
               			<input type="text" class="form-control" name="search" placeholder="请输入花型编号">
               		    </div>
               		    <div class="col-md-2">
               			<button type="submit" class="btn btn-primary">添加</button>
               			</div>
               		</form>
	               			
                     		<table class="table table-hover responsive">
                                        <thead>
                                            <tr>
                                            	<th>#</th>
                                                <th>花型编号</th>
                                                <th>产品图片</th>
                                                <th>门市价</th>
                                                <th>数量</th>
                                                <th>合计</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>删除</button></td>
                                                <td><img src="img/content/thumbnail1.jpg" style="width: 100px;" alt="Image"></td>
                                                <td><strong>Product name</strong></td>
                                                <td><strong class="text-danger">$ 30.00</strong></td>
                                                <td><input type="text" class="form-control" style="width: 50px;" value="1"></td>
                                                <td class="text-right">$ 30.00</td>
                                            </tr>
                                            <tr>
                                                <td><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>删除</button></td>
                                                <td><img src="img/content/thumbnail2.jpg" style="width: 100px;" alt="Image"></td>
                                                <td><strong>Product name</strong></td>
                                                <td><strong class="text-danger">$ 30.00</strong></td>
                                                <td><input type="text" class="form-control" style="width: 50px;" value="1"></td>
                                                <td class="text-right">$ 30.00</td>
                                            </tr>
                                            <tr>
                                                <td><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>删除</button></td>
                                                <td><img src="img/content/thumbnail10.jpg" style="width: 100px;" alt="Image"></td>
                                                <td><strong>Product name</strong></td>
                                                <td><strong class="text-danger">$ 30.00</strong></td>
                                                <td><input type="text" class="form-control" style="width: 50px;" value="1"></td>
                                                <td class="text-right">$ 30.00</td>
                                            </tr>
                                            <tr class="success">
                                                <td colspan="5" class="text-right">总计</td>
                                                <td class="text-right">$ 90.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <form>
                                    	<button type="submit" class="btn btn-primary btn-lg btn-block">结算</button>
                                    </form>
                     	</div>
                     </div>-->
                     <!-/row->    
            </div><!--/box-content-->
        </div><!--/box-inner-->
    </div>
    <!--/span-->

</div><!--/row-->
@stop