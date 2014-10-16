@extends('layouts.cpanel')

@section('title')
	@parent - 新增员工
@stop

@section('breadcrumb')
	@parent
	    <li>
			员工
	    </li>
		<li>
			新增员工
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 新增员工</h2>
            </div>
            <div class="box-content">
                    	<form role="form" class="form-horizontal" name="items" method="post" enctype="multipart/form-data" action="{{URL::route('admin.employees.store')}}">
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
						    <label for="username" class="col-sm-2 control-label">用户名</label>
						    <div class="col-sm-10">
						    <input type="text" class="
						    form-control" name="username" id="username" placeholder="">
							</div>
						  </div>
						</div>
						<div class="col-sm-6">
						  <div class="form-group">
						    <label for="password" class="col-sm-2 control-label">密码</label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control" name="password" id="password" placeholder="">
						</div>
						  </div>
						</div>
						</div>
						 <!--/row-->

						 <div class="row">

						<div class="col-sm-6">
						   <div class="form-group">
						    <label for="department_id" class="col-sm-2 control-label">部门</label>
						    <div class="col-sm-10">
						    {{Form::select('department_id', 
						    	array(0 => '选择部门。。。') +Department::lists('name', 'id'),
						    	null,
						    	array('class'=>'form-control')
						    )}}
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