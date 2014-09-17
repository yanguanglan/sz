<!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">资源</li>
                          <li class="accordion"><a href="#"><i class="glyphicon glyphicon-log-out"></i><span> 客户</span></a>
                        <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">子菜单</a></li>
                                <li><a href="#">子菜单</a></li>         
                        </ul> 
                        </li>

                            <li class="accordion"><a href="#"><i class="glyphicon glyphicon-log-in"></i><span> 货品</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">子菜单</a></li>
                                <li><a href="#">子菜单</a></li>
                                </ul>
                        </li>
                        <li class="accordion"><a href="#"><i
                                    class="glyphicon glyphicon-search"></i><span> 供应商</span></a>
                                    <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">子菜单</a></li>
                                <li><a href="#">子菜单</a></li>                                </ul>                                </li>

                        <li class="nav-header">业务</li>
                        <li class="accordion"><a href="#"><i
                                    class="glyphicon glyphicon-search"></i><span> 销售</span></a>
                                    <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">子菜单</a></li>
                                <li><a href="#">子菜单</a></li>                                </ul>                                </li>
                        <li class="accordion"><a href="#"><i
                                    class="glyphicon glyphicon-search"></i><span> 应收</span></a>
                                     <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">子菜单</a></li>
                                <li><a href="#">子菜单</a></li>                                </ul>                                </li>
                        <li class="accordion"><a href="#"><i
                                    class="glyphicon glyphicon-search"></i><span> 采购</span></a>
                                     <ul class="nav nav-pills nav-stacked">
                                <li><a data-toggle="modal" href="{{ URL::to('admin/itemreceive/modal?type=add') }}" data-target="#itemReceive-myModal">预录入</a></li>
                                <li><a data-toggle="modal" href="{{ URL::to('admin/itemreceive/modal?type=edit') }}" data-target="#itemReceive-myModal">抄包收货</a></li>
                                <li><a data-toggle="modal" href="{{ URL::to('admin/itemreceive/packagedetailmodal') }}" data-target="#itemReceivePackageDetail-myModal">拆包检验</a></li>                                </ul>                                </li>

                        <li class="accordion"><a href="#"><i class="glyphicon glyphicon-globe"></i><span> 应付</span></a>
                             <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">子菜单</a></li>
                                <li><a href="#">子菜单</a></li>                                </ul> 
                        </li>                        </li>
                        <li class="accordion"><a href="#"><i class="glyphicon glyphicon-globe"></i><span> 库存</span></a>
                             <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{URL::to('admin/warehouse/history')}}">入库</a></li>
                                <li><a href="#">备货</a></li>                                </ul> 
                        </li>                        </li>
                        <li class="accordion"><a href="#"><i class="glyphicon glyphicon-globe"></i><span> 总账</span></a>
                             <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">子菜单</a></li>
                                <li><a href="#">子菜单</a></li>                                </ul> 
                        </li>
                                                </li>
                       <li class="nav-header">设置</li>
                       <li class="accordion"><a href="#"><i class="glyphicon glyphicon-globe"></i><span> 部门</span></a>
                             <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">子菜单</a></li>
                                <li><a href="#">子菜单</a></li>                                </ul> 
                        </li>
                                                </li>
                        <li class="accordion"><a href="#"><i class="glyphicon glyphicon-globe"></i><span> 员工</span></a>
                             <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">子菜单</a></li>
                                <li><a href="#">子菜单</a></li>                                </ul> 
                        </li>
                                                </li>
                         <li class="accordion"><a href="#"><i class="glyphicon glyphicon-globe"></i><span> 权限</span></a>
                             <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">子菜单</a></li>
                                <li><a href="#">子菜单</a></li>                                </ul> 
                        </li>
                                                </li>
                        <li class="accordion"><a href="#"><i class="glyphicon glyphicon-globe"></i><span> 基础数据</span></a>
                             <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">子菜单</a></li>
                                <li><a href="#">子菜单</a></li>                                </ul> 
                        </li>
                                                </li>
                                       </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->