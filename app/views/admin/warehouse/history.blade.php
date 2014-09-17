@extends('layouts.cpanel')

@section('title')
	@parent - 入库
@stop

@section('breadcrumb')
	@parent
	    <li>
			库存
	    </li>
		<li>
			入库
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 入库记录</h2>
            </div>
            <div class="box-content">
               	{{ Datatable::table()
    				->addColumn('入库时间', '检验报告号', '花型编号', '缸号', '数量（米）', '存放位置', '入库员')
    				       // these are the column headings to be shown
    				->setUrl(route('api.historywarehouse'))   // this is the route where data will be retrieved
   					->render() }}
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
<script>
$(document).ready(function() {
    $(document).anysearch({
        reactOnKeycodes: 'all',
        secondsBetweenKeypress: 5,
        searchPattern: {1: '[^~,]*'},
        minimumChars: 3,
        liveField: {selector: '#liveField', value: true},
        excludeFocus: 'input,textarea,select,#tfield',
        enterKey: 13,
        backspaceKey: 8,
        checkIsBarcodeMilliseconds: 250,
        checkBarcodeMinLength: 6,
        searchSlider: true,
        startAnysearch: function() {
            //openHelp();
        },
        stopAnysearch: function() {
            //closeHelp();
        },
        minimumCharsNotReached: function(string, stringLength, minLength) {
            //alert(string + ' has ' + stringLength + ' chars! Minlength: ' + minLength);
            //没有找到
            alert("搜索条件不能少于" + stringLength + "个字符！");
        },
        searchFunc: function(string) {
            //doAjaxSearch(string);
            //找到布匹，弹窗
            $("#HistoryWareHouse-myModal").modal({
			    remote: "{{URL::to('admin/warehouse/modal')}}" + "?identity=" + string
			});
            console.log(string);
        },
        patternsNotMatched: function(string, patterns) {
        	//不规范
            alert("搜索条件中不能有非法字符！");
        }, 
        isBarcode: function(barcode){
            //ajaxCheckBarcode(barcode);
            //找到布匹，弹窗
            $("#HistoryWareHouse-myModal").modal({
			    remote: "{{URL::to('admin/warehouse/modal')}}" + "?identity=" + string
			});
            console.log("bar:"+barcode);
        }
    });
});
</script>
@stop