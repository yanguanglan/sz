@extends('layouts.cpanel')

@section('title')
	@parent - 拆包
@stop

@section('breadcrumb')
	@parent
	    <li>
			采购
	    </li>
		<li>
			拆包
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 包裹清单</h2>
            </div>
            <div class="box-content">
             	<h3 class="text-center">包号（{{$package_no}}）</h3>
               	<!--form-->
            	<form class="form-horizontal" role="form">
	            	<div class="form-group">
	                    <div class="col-sm-6">
	                    <label for="">供应商</label>
	                        {{$supplier->name}}

	                        <!--<button type="submit" class="btn btn-primary btn-setting">分包录入</button>-->
	                    </div>
	 	                    <div class="col-sm-6 text-right">
	                    	<label for="">日期</label>
	                    	{{date('Y年m月d日', strtotime($received_date))}}
	                    </div>    
	                </div>
            	</form>
               	<!-- table -->
               	<table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                        	<th class="text-center">检验报告号</th>
                            <th class="text-center">花型编号</th>
                            <th class="text-center">缸号</th>
                        	<th class="text-center">数量（米）</th>
                            <th class="text-center">建议存放位置</th>
                            <th class="text-center">位置现有数量</th>
                            <th class="text-center">拆包入库</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($itemReceivedPackageDetails as $itemReceivedPackageDetail)
                            <tr>
                            	<td class="text-center">{{$itemReceivedPackageDetail->no}}</td>
                            	<td class="text-center">{{$itemReceivedPackageDetail->item}}</td>
                            	<td class="text-center">{{$itemReceivedPackageDetail->batch}}</td>
                            	<td class="text-center">{{$itemReceivedPackageDetail->quantity}}</td>
                            	<td class="text-center">{{$itemReceivedPackageDetail->readyposition}}</td>
                            	<td class="text-center">{{$itemReceivedPackageDetail->position}}</td>
                            	<td class="text-center"><a class="btn btn-primary" href="#">
                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                入库
                                </a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="form-group row">
	                    <div class="col-sm-6">
	                    	<label for="">拆包员</label> 蓝燕光
	                    </div>
	                    <div class="col-sm-6">
	                    	<label for="">录入员</label> 蓝燕光
	                    </div>    
	                </div>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
@stop