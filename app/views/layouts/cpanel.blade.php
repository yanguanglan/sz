@extends('layouts.default')

@section('main')
	@include('partials.topbar')
<div class="ch-container">
    <div class="row">
        @include('partials.leftmenu')
        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">警告！</h4>

                <p>你必须在本站启用 <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    </p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
			    <ul class="breadcrumb">
			    	@section('breadcrumb')
			        <li>
			            <a href="#">首页</a>
			        </li>
			        @show
			    </ul>
			</div>
			@yield('content')
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
    <hr>

    @include('partials.modal')
    @include('partials.noty')
    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; 色织ERP - 浙江恒盛纺织有限公司 2014</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->
@stop