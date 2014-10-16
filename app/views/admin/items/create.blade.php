@extends('layouts.cpanel')

@section('title')
	@parent - 新增货品
@stop

@section('breadcrumb')
	@parent
	    <li>
			客户
	    </li>
		<li>
			新增货品
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 新增货品</h2>
            </div>
            <div class="box-content">
                    	<form role="form" class="form-horizontal" name="items" method="post" enctype="multipart/form-data" action="{{URL::route('admin.items.store')}}">
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
						    <label for="code" class="col-sm-2 control-label">型号</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="code" id="code" placeholder="">
						</div>
						  </div>
						</div>
						</div>
						 <!--/row-->
						<div class="row">
                       	
						  <div class="col-sm-6">
						  <div class="form-group">
						    <label for="price_market" class="col-sm-2 control-label">市场价</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="price_market" id="price_market" placeholder="">
						</div>
						  </div>

						</div>

							<div class="col-sm-6">
						  <div class="form-group">
						    <label for="stock" class="col-sm-2 control-label">库存</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="stock" id="stock" placeholder="">
						</div>
						  </div>
						</div>
						</div>
						 <!--/row-->

						 <div class="row">

						<div class="col-sm-6">
						   <div class="form-group">
						    <label for="category_id" class="col-sm-2 control-label">分类</label>
						    <div class="col-sm-10">
						    {{Form::select('category_id', 
						    	array(0 => '选择分类。。。') +ItemCategory::lists('name', 'id'),
						    	null,
						    	array('class'=>'form-control')
						    )}}
						</div>
						  </div>
						</div>

						<div class="col-sm-6">
						  <div class="form-group">
						    <label for="image" class="col-sm-2 control-label">图片</label>
						    <div class="col-sm-10">
						    <input type="file" class="form-control" name="image" id="image" placeholder="">
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