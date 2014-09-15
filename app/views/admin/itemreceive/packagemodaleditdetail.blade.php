@extends('layouts.cpanel')

@section('title')
	@parent - 收货
@stop

@section('breadcrumb')
	@parent
	    <li>
			采购
	    </li>
		<li>
			收货
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 收货列表</h2>
            </div>
            <div class="box-content">
            	<h3 class="text-center">供应商（{{$supplier->name}}）</h3>
               	<!-- table -->
               	<table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>包号</th>
                            <th>数量</th>
                        </tr>
                        </thead>
                        <tbody>
                        	@foreach($packages as $package)
                        <tr>
                            <td>{{$package->package_no}}</td>
                            <td class="center">{{$package->item_count}}</td>
                        </tr>
                        	@endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
@stop