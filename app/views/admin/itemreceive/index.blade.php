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
               	<!-- table -->
               	<table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>供应商</th>
                            <th>运单编号</th>
                            <th>运单时间</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        	@foreach($itemReceives as $itemReceive)
                        <tr>
                            <td>{{$itemReceive->supplier->name}}</td>
                            <td class="center">{{$itemReceive->no}}</td>
                            <td class="center">{{$itemReceive->received_date}}</td>
                            <td class="center">
                                @if($itemReceive->status)
                                <span class="label-success label label-default">
                                	已收货
                                </span>
                                @else
                                <span class="label-danger label label-default">
                                	未收货
                                </span>
                                @endif
                                
                            </td>
                            <td class="center">
                                <a class="btn btn-success" href="{{URL::to('admin/itemreceive/detail?id='.$itemReceive->id)}}">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    查看
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        	@endforeach
                        </tbody>
                    </table>
                    {{ $itemReceives->links() }}
                    <!--<ul class="pagination pagination-centered">
                        <li><a href="#">Prev</a></li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>-->
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
@stop