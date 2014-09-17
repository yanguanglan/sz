@extends('layouts.cpanel')

@section('title')
	@parent - 抄包收货
@stop

@section('breadcrumb')
	@parent
	    <li>
			采购
	    </li>
		<li>
			抄包收货
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 收货列表</h2>
                <div class="box-icon" data-toggle="tooltip" data-original-title="添加抄包录入">
            	<a href="{{URL::to('admin/itemreceive/packagemodaledit?id='.$supplier->id)}}" data-target="#itemReceivePackageEdit-myModal" data-toggle="modal"  class="btn btn-round btn-primary btn-lg"><i class="glyphicon glyphicon-plus-sign"></i></a>
                    </div>
            </div>
            <div class="box-content">
            	<h3 class="text-center">供应商（{{$supplier->name}}）</h3>
               	{{ Datatable::table()
    				->addColumn('发包日期', '包号', '米数', '审核')
    				       // these are the column headings to be shown
    				->setUrl(route('api.modaledit', 'supplier_id='.$supplier->id))   // this is the route where data will be retrieved
   					->render() }}
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
@stop