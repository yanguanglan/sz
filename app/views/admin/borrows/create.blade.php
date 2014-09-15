@extends('layouts.cpanel')

@section('title')
	@parent - 新增货贷
@stop

@section('breadcrumb')
	@parent
	    <li>
			借贷管理
	    </li>
		<li>
			新增借贷
	    </li>
@stop

@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 新增借贷</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" role="form" name="borrows" method="post" action="{{URL::route('admin.borrows.store')}}">
                <ul class="nav nav-tabs" id="myTab">
                    <li class=""><a href="#borrows1">借贷</a></li>
                    <li class="active"><a href="#borrows2">票据</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane" id="borrows1">
                    	<div class="box-content">
                    		 <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="jkdw" class="col-sm-2 control-label">借款单位</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="jkdw" name="jkdw" placeholder="">
					    </div>
					  	</div>
						  </div>
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="jkzl" class="col-sm-2 control-label">借款种类</label>
					    <div class="col-sm-10">
					      <select class="form-control" name="jkzl" id="jkzl">
			                <option value="贷款">贷款</option>
			                <option value="银行承兑汇票">银行承兑汇票</option>
			                <option value="国内信用证">国内信用证</option>
			                <option value="国外信用证">国外信用证</option>
			                <option value="保函">保函</option>
			              </select>
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->

					   <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="djbh" class="col-sm-2 control-label">单据编号</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="djbh" name="djbh" placeholder="">
					    </div>
					  	</div>
						  </div>
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="dfdw" class="col-sm-2 control-label">对方单位</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="dfdw" name="dfdw" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->

					   <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="dywp" class="col-sm-2 control-label">抵押物品</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="dywp" name="dywp" placeholder="">
					    </div>
					  	</div>
						  </div>
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="dyje" class="col-sm-2 control-label">抵押金额</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="dyje" name="dyje" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->

					   <div class="row">
                       	<div class="col-sm-6">
						     <div class="form-group">
					    <label for="dypgje" class="col-sm-2 control-label">抵押评估金额</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="dypgje" name="dypgje" placeholder="">
					    </div>
					  	</div>
						  </div>
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="bzdw" class="col-sm-2 control-label">保证单位</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="bzdw" name="bzdw" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->

					   <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="bzje" class="col-sm-2 control-label">保证金额</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="bzje" name="bzje" placeholder="">
					    </div>
					  	</div>
						  </div>
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="jkje" class="col-sm-2 control-label">借款金额</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="jkje" name="jkje" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->


					  <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="jkrq" class="col-sm-2 control-label">借款日期</label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" id="jkrq" name="jkrq" placeholder="">
					    </div>
					  	</div>
						  </div>
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="hkrq" class="col-sm-2 control-label">还款日期</label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" id="hkrq" name="hkrq" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->

					  <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="dknll" class="col-sm-2 control-label">贷款年利率</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="dknll" name="dknll" placeholder="">
					    </div>
					  	</div>
						  </div>
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="fxr" class="col-sm-2 control-label">付息日</label>
					    <div class="col-sm-10">
					      <select class="form-control" name="fxr" id="fxr">
			                <option value="每月20日">每月20日</option>
			                <option value="每季20日">每季20日</option>
			                <option value="还本付息">还本付息</option>
			              </select>
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->
					  	   
					   <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="gldw" class="col-sm-2 control-label">关联单位</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="gldw" name="gldw" placeholder="">
					    </div>
					  	</div>
						  </div>
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="yhmc" class="col-sm-2 control-label">银行名称</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="yhmc" name="yhmc" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->

					   <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="bzjbl" class="col-sm-2 control-label">保证金比例</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="bzjbl" name="bzjbl" placeholder="">
					    </div>
					  	</div>
						  </div>
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="ckje" class="col-sm-2 control-label">敞口金额</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="ckje" name="ckje" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->

					   <div class="row">
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="cprq" class="col-sm-2 control-label">出票日期</label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" id="cprq" name="cprq" placeholder="">
					    </div>
					  	</div>
						  </div>
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="dqrq" class="col-sm-2 control-label">到期日期</label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" id="dqrq" name="dqrq" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->

					   <div class="row">
                       	
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="kzsxf" class="col-sm-2 control-label">开证手续费</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="kzsxf" name="kzsxf" placeholder="">
					    </div>
					  	</div>
						  </div>
						  	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="cdsxf" class="col-sm-2 control-label">承兑手续费</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="cdsxf" name="cdsxf" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->

					   <div class="row">
                       
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="xsckff" class="col-sm-2 control-label">吸收存款付费</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="xsckff" name="xsckff" placeholder="">
					    </div>
					  	</div>
						  </div>
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="yhzjywf" class="col-sm-2 control-label">银行中间业务费</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="yhzjywf" name="yhzjywf" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->

					   <div class="row">
                       	
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="qt" class="col-sm-2 control-label">其他</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="qt" name="qt" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->
                    	</div><!--box-content-->
                    </div><!--borrows1-->
                    <div class="tab-pane active" id="borrows2">
                    	<div class="box-content">
                    		<div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="cdh" class="col-sm-2 control-label">承兑（信用证）号</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="cdh" name="cdh" placeholder="">
					    </div>
					  	</div>
						  </div>
						 <div class="col-sm-6">
						    <div class="form-group">
					    <label for="pmje" class="col-sm-2 control-label">票面金额</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="pmje" name="pmje" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->

					   <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="txdw" class="col-sm-2 control-label">贴现银行</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txdw" name="txdw" placeholder="">
					    </div>
					  	</div>
						  </div>
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="jbr" class="col-sm-2 control-label">经办人</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="jbr" name="jbr" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->

					   <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="lxdh" class="col-sm-2 control-label">联系电话</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="lxdh" name="lxdh" placeholder="">
					    </div>
					  	</div>
						  </div>
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="txrq" class="col-sm-2 control-label">贴现日期</label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" id="txrq" name="txrq" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->

					   <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="txts" class="col-sm-2 control-label">贴现天数</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txts" name="txts" placeholder="">
					    </div>
					  	</div>
						  </div>

						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="txnll" class="col-sm-2 control-label">贴现年利率</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txnll" name="txnll" placeholder="">
					    </div>
					  	</div>
						  </div>
						  	
					  </div><!--/row-->

					   <div class="row">
					   	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="txlxjfy" class="col-sm-2 control-label">贴现利息及费用</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txlxjfy" name="txlxjfy" placeholder="">
					    </div>
					  	</div>
						  </div>

                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="dzje" class="col-sm-2 control-label">到账金额</label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" id="dzje" name="dzje" placeholder="">
					    </div>
					  	</div>
						  </div>
						  
					  </div><!--/row-->

					   <div class="row">
					   	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="dzrq" class="col-sm-2 control-label">到账日期</label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" id="dzrq" name="dzrq" placeholder="">
					    </div>
					  	</div>
						  </div>

                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="dzdw" class="col-sm-2 control-label">到账单位</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="dzdw" name="dzdw" placeholder="">
					    </div>
					  	</div>
						  </div>
						  
					  </div><!--/row-->

					   <div class="row">
                       	<div class="col-sm-6">
						    <div class="form-group">
					    <label for="dzzh" class="col-sm-2 control-label">到账账号</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="dzzh" name="dzzh" placeholder="">
					    </div>
					  	</div>
						  </div>
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="dzyh" class="col-sm-2 control-label">到账银行</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="dzyh" name="dzyh" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->

					   <div class="row">
						  <div class="col-sm-6">
						    <div class="form-group">
					    <label for="bz" class="col-sm-2 control-label">备注</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="bz" name="bz" placeholder="">
					    </div>
					  	</div>
						  </div>
					  </div><!--/row-->
                    	</div><!--box-content-->
                    </div><!--borrows2-->	
                </div>
                <button type="submit" class="btn-primary btn-lg btn-block">提交</button>
               </form>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
@stop