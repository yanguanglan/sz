<!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> 
                {{ HTML::image('img/logo20.png', '资金管理 Logo', array('class'=>'hidden-xs')) }}
                <span>SZERP</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> 管理员</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">个人资料</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">退出</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> 切换皮肤</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> 经典</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> 淡蓝</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> 电子</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> 简洁</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> 黑色</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> 平滑</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> 蓝灰</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> 立体</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> 亮丽</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <!--<li><a href="#"><i class="glyphicon glyphicon-globe"></i> 查看网站</a></li>-->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> 快捷菜单 <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">添加分类</a></li>
                        <li><a href="#">添加货品</a></li>
                        <li><a href="#">添加客户</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="搜索" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->