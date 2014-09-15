<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        @section('title')
            色织ERP
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The styles -->
    {{ HTML::style('/css/bootstrap-cerulean.min.css', array("id"=>"bt-css")) }}
    {{ HTML::style('/css/charisma-app.css') }}
    {{ HTML::style('/bower_components/fullcalendar/dist/fullcalendar.css') }}
    {{ HTML::style('/bower_components/fullcalendar/dist/fullcalendar.print.css') }}
    {{ HTML::style('/bower_components/chosen/chosen.min.css') }}
    {{ HTML::style('/bower_components/colorbox/example3/colorbox.css') }}
    {{ HTML::style('/bower_components/responsive-tables/responsive-tables.css') }}
    {{ HTML::style('/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css') }}
    {{ HTML::style('/css/jquery.noty.css') }}
    {{ HTML::style('/css/noty_theme_default.css') }}
    {{ HTML::style('/css/elfinder.min.css') }}
    {{ HTML::style('/css/elfinder.theme.css') }}
    {{ HTML::style('/css/jquery.iphone.toggle.css') }}
    {{ HTML::style('/css/uploadify.css') }}
    {{ HTML::style('/css/animate.min.css') }}
    <!-- jQuery -->
    {{ HTML::script('/bower_components/jquery/jquery.min.js') }}
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">
  </head>

<body>
@yield('main')
<!-- external javascript -->
{{ HTML::script('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}
<!-- library for cookie management -->
{{ HTML::script('/js/jquery.cookie.js') }}
<!-- calender plugin -->
{{ HTML::script('/bower_components/moment/min/moment.min.js') }}
{{ HTML::script('/bower_components/fullcalendar/dist/fullcalendar.min.js') }}
<!-- data table plugin -->
{{ HTML::script('/js/jquery.dataTables.min.js') }}
<!-- select or dropdown enhancer -->
{{ HTML::script('/bower_components/chosen/chosen.jquery.js') }}
<!-- plugin for gallery image view -->
{{ HTML::script('/bower_components/colorbox/jquery.colorbox-min.js') }}
<!-- notification plugin -->
{{ HTML::script('/js/jquery.noty.js') }}
<!-- library for making tables responsive -->
{{ HTML::script('/bower_components/responsive-tables/responsive-tables.js') }}
<!-- tour plugin -->
{{ HTML::script('/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js') }}
<!-- star rating plugin -->
{{ HTML::script('/js/jquery.raty.min.js') }}
<!-- for iOS style toggle switch -->
{{ HTML::script('/js/jquery.iphone.toggle.js') }}
<!-- autogrowing textarea plugin -->
{{ HTML::script('/js/jquery.autogrow-textarea.js') }}
<!-- multiple file upload plugin -->
{{ HTML::script('/js/jquery.uploadify-3.1.min.js') }}
<!-- history.js for cross-browser state change on ajax -->
{{ HTML::script('/js/jquery.history.js') }}
<!-- application script for Charisma demo -->
{{ HTML::script('/js/charisma.js') }}
</body>
</html>
