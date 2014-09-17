<form class="form-horizontal" role="form" name="HistoryWareHouse-myModal-form" id="HistoryWareHouse-myModal-form" method="POST" action="{{URL::to('admin/warehouse/modal')}}">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3>入库</h3>
</div>
<div class="modal-body">
<div class="box-content">
    @if($itemReceivedPackageDetail)
<table class="table table-striped table-bordered responsive">
                        <tbody>
  						<tr>
                            <th class="text-center">检验报告号</th>
                            <td class="text-center" colspan="3">{{$itemReceivedPackageDetail->identity}}</td>                        
                        </tr>
                        <tr>
                            <th class="text-center">型号</th>
                            <td class="text-center">{{$itemReceivedPackageDetail->item}}</td>
                            <th class="text-center">缸号</th>
                            <td class="text-center">{{$itemReceivedPackageDetail->batch}}</td>
                        </tr>
                        <tr>
                            <th class="text-center">数量（米）</th>
                            <td class="text-center">{{$itemReceivedPackageDetail->quantity}}</td>
                            <td class="text-center" rowspan="3" colspan="2">{{ HTML::image('img/liantu.png', '', array('width' => '120px', 'height'=> '120px')) }}</td>
                            
                        </tr>
                        <tr>
                            <th class="text-center">建议存放位置</th>
                            <td class="text-center"><input class="form-control text-center" name="readyposition" type="text" value="{{$itemReceivedPackageDetail->readyposition}}"></td>
                        </tr>
                        <tr>
                            <th class="text-center">操作员</th>
                            <td class="text-center">5</td>                      
                        </tr>
                        </tbody>
               </table>
   @else
   没有找到相关布匹
   @endif
</div>
<!-- /body -->
</div>
<div class="modal-footer">
@if($itemReceivedPackageDetail)
<input class="form-control text-center" name="id" type="hidden" value="{{$itemReceivedPackageDetail->id}}">
<button class="btn btn-default" data-dismiss="modal">关闭</button>
<button type="submit" class="btn btn-primary" >提交</button>
@else
<button class="btn btn-default" data-dismiss="modal">关闭</button>
@endif
</div>
</form>
