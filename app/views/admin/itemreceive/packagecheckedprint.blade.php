@extends('layouts.default')

@section('main')
<table class="table table-striped table-bordered">
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
                            <td class="text-center">{{$itemReceivedPackageDetail->readyposition}}</td>
                        </tr>
                        <tr>
                            <th class="text-center">审核</th>
                            <td class="text-center">5</td>                      
                        </tr>
                        <tr>
                            <td class="text-center" colspan="4">{{DNS1D::getBarcodeSVG($itemReceivedPackageDetail->identity, "C128")}}</td>                     
                        </tr>
                        </tbody>
               </table>
@stop