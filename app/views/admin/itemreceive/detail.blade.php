@extends('layouts.cpanel')

@section('title')
	@parent - 收货清单
@stop

@section('breadcrumb')
	@parent
	    <li>
			采购
	    </li>
		<li>
			收货清单
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 收货清单</h2>
            </div>
            <div class="box-content">
             	<h3 class="text-center">收货清单</h3>
               	<!--form-->
            	<form class="form-horizontal" role="form">
	            	<div class="form-group">
	                    <div class="col-sm-6">
	                    <label for="">供应商</label>
	                        {{$itemReceive->supplier->name}}

	                        <!--<button type="submit" class="btn btn-primary btn-setting">分包录入</button>-->
	                    </div>
	                    <div class="col-sm-6 text-right">
	                    	<label for="">日期</label>
	                    	{{date('Y年m月d日', strtotime($itemReceive->received_date))}}
	                    </div>    
	                </div>
            	</form>
               	<!-- table -->
               	<table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th class="text-center" rowspan="2">收包日期</th>
                            <th class="text-center" rowspan="2">包号</th>
                            <th class="text-center" rowspan="2">总米数</th>
                            <th class="text-center" rowspan="2">花型编号</th>
                            <th class="text-center" rowspan="2">缸号</th>
                        	<th class="text-center" rowspan="1" colspan="5">
                            	数量
                            </th>
                            <th class="text-center" rowspan="2">匹数</th>
                            <th class="text-center" rowspan="2">建议存放位置</th>
                            <th class="text-center" rowspan="2">位置现有数量</th>
                            <th class="text-center" rowspan="2">小计</th>
                            <th class="text-center" rowspan="2">单价</th>
                            <th class="text-center" rowspan="2">金额</th>
                        </tr>
                        <tr>                           
                            <th class="text-center" rowspan="1" colspan="1">1</th>
                            <th class="text-center" rowspan="1" colspan="1">2</th>
                            <th class="text-center" rowspan="1" colspan="1">3</th>
                            <th class="text-center" rowspan="1" colspan="1">4</th>
                            <th class="text-center" rowspan="1" colspan="1">5</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $itemTotal = 0;
                            $itemAmount = 0;
                            $itemCount = 0;
                            ?>
                            @foreach($itemReceivedPackages as $itemReceivedPackage)
                                <?php
                                    $i = 0;
                                    $rowspan = 0;
                                    $rowspanArray = array();
                                    $items = array();
                                    //遍历处理
                                    
                                    foreach($itemReceivedPackage->itemReceivedPackageDeatils as $itemReceivedPackageDeatil){

                                        $items[$itemReceivedPackageDeatil->item][$itemReceivedPackageDeatil->batch][] = $itemReceivedPackageDeatil;

                                            if(isset($rowspanArray[$itemReceivedPackageDeatil->item.'-'.$itemReceivedPackageDeatil->batch])){
                                                $rowspanArray[$itemReceivedPackageDeatil->item.'-'.$itemReceivedPackageDeatil->batch]++;
                                            } else {
                                                $rowspanArray[$itemReceivedPackageDeatil->item.'-'.$itemReceivedPackageDeatil->batch] = 0;
                                            }
                                    }

                                    
                                    foreach ($rowspanArray as $value) {
                                        $rowspan += floor($value / 5) + 1;
                                    }
                                                                        
                                    /*$itemtemp = array();
                                    foreach ($items as $key => $value) {
                                        foreach ($value as $k => $v) {
                                            $newitems[]['item'] = $key;
                                            $newitems[]['batch'] = $k;
                                            $newitems[]['batch'] = 
                                        }
                                    }*/

                                ?>
                                @foreach($items as $item => $itemValue)
                                    <tr>
                                    @if($i==0)
                                     <td class="text-center center" rowspan="{{$rowspan}}">{{date('m月d日', strtotime($itemReceivedPackage->package_received_date))}}</td>
                            <td class="text-center center" rowspan="{{$rowspan}}">{{$itemReceivedPackage->package_no}}</td>
                            <td class="text-center center" rowspan="{{$rowspan}}">{{$itemReceivedPackage->item_count}}</td>
                                     <?php
                                        $i = 1;
                                     ?>
                                    @endif

                                    @foreach($itemValue as $batch => $batchValue)
                                        <?php
                                        //匹数
                                        $l = count($batchValue);
                                        $k = 0;
                                        while ($l >= 1) {
                                            $j = $batchValue[$k]->quantity;
                                        ?>
                                        <td class="text-center">
                               {{$batchValue[$k]->item}}
                            </td>
                            <td class="text-center">
                               {{$batchValue[$k]->batch}} 
                            </td>
                            <td class="text-center">
                               {{$batchValue[$k]->quantity}}
                            </td>
                            <td class="text-center">
                               @if(isset($batchValue[$k+1])) <?php $j+=$batchValue[$k+1]->quantity ?> {{$batchValue[$k+1]->quantity}} @endif 
                            </td>
                            <td class="text-center">
                               @if(isset($batchValue[$k+2])) <?php $j+=$batchValue[$k+1]->quantity ?> {{$batchValue[$k+2]->quantity}} @endif 
                            </td>
                            <td class="text-center">
                               @if(isset($batchValue[$k+3])) <?php $j+=$batchValue[$k+1]->quantity ?> {{$batchValue[$k+3]->quantity}} @endif 
                            </td>
                            <td class="text-center">
                               @if(isset($batchValue[$k+4])) <?php $j+=$batchValue[$k+1]->quantity ?> {{$batchValue[$k+4]->quantity}} @endif 
                            </td>
                            <td class="text-center">
                               @if($l>5) <?php $itemCount += 5;?> 5 @else <?php $itemCount += $l;?> {{$l}} @endif
                            </td>
                                <td class="text-center">
                                {{$batchValue[$k]->position}}
                            </td>
                            <td class="text-center">
                                {{$batchValue[$k]->readyposition}}
                            </td>
                            <td class="text-center">
                                {{$j}}
                            </td>

                                 <td class="text-center">
                                {{$batchValue[$k]->price}}
                            </td>
                            <td class="text-center">
                                <?php echo $j * $batchValue[$k]->price ?>
                            </td>
                            </tr>
                                                                    <?php
                                             # code...
                                            $l = $l - 5;
                                            $k = $k + 5;
                                        } 
                                        ?>
                            
                                    @endforeach

                                @endforeach
                            <?php
                            $itemTotal += $itemReceivedPackage->item_count;
                            $itemAmount += $itemReceivedPackage->amount;
                            
                            ?>
                            @endforeach
 
                        </tbody>

                        <tfooter>
							<tr class="success">
                            <th class="text-center center">合计</th>
                            <th class="text-center center"></th>
                            <th class="text-center center">{{$itemTotal}}</th>
                            <th class="text-center">
                               
                            </th>
                            <th class="text-center">
                                
                            </th>
                            <th class="text-center">
                                
                            </th>
                            <th class="text-center">
                                
                            </th>
                            <th class="text-center">
                               
                            </th>
                            <th class="text-center">
                               
                            </th>
                            <th class="text-center">
                                
                            </th>
                            <th class="text-center">
                                {{$itemCount}}
                            </th>
                                <th class="text-center">
                                
                            </th>
                            <th class="text-center">
                                
                            </th>
                            <th class="text-center">
                               
                            </th> 

                                 <th class="text-center">
                                
                            </th>
                            <th class="text-center">
                                {{$itemAmount}}
                            </th>
                        </tr>
                      	</tfooter>
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