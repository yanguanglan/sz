@extends('layouts.cpanel')

@section('title')
	@parent - 新增部门
@stop

@section('breadcrumb')
	@parent
	    <li>
			部门
	    </li>
		<li>
			新增部门
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 新增部门</h2>
            </div>
            <div class="box-content">
                    	<form role="form" class="form-horizontal" name="items" method="post" enctype="multipart/form-data" action="{{URL::route('admin.departments.store')}}">
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
						    <label for="right" class="col-sm-2 control-label">权限</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="right" id="right" placeholder="">
						</div>
						  </div>
						</div>
						</div>
						 <!--/row-->

                    	</div><!--box-content-->
                          	<button type="submit" class="btn-primary btn-lg btn-block">提交</button>
               			</form>
                             </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
@stop