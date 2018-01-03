<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {{ Html::style('common/bootstrap/dist/css/bootstrap.min.css') }}
        {{ Html::style('common/font-awesome/css/font-awesome.min.css') }}
        {{ Html::style('common/nprogress/nprogress.css') }}
        {{ Html::style('common/iCheck/skins/flat/green.css') }}
        {{ Html::style('common/nprogress/nprogress.css') }}
        {{ Html::style('common/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}
        {{ Html::style('common/jqvmap/dist/jqvmap.min.css') }}
        {{ Html::style('common/bootstrap-daterangepicker/daterangepicker.css') }}
        {{ Html::style('admin/css/custom.min.css') }}
        {{ Html::script('common/jquery/dist/jquery.min.js') }}
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    @include('admin.layout._left_bar')
                </div>
                <div class="top_nav">
                    @include('admin.layout._top_menu')
                </div>

                <div class="right_col" role="main">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Bootstrap -->
        {{ Html::script('common/bootstrap/dist/js/bootstrap.min.js') }}
        <!-- FastClick -->
        {{ Html::script('common/fastclick/lib/fastclick.js') }}
        <!-- NProgress -->
        {{ Html::script('common/nprogress/nprogress.js') }}
        <!-- gauge.js -->
        {{ Html::script('common/gauge.js/dist/gauge.min.js') }}
        <!-- bootstrap-progressbar -->
        {{ Html::script('common/bootstrap-progressbar/bootstrap-progressbar.min.js') }}
        <!-- iCheck -->
        {{ Html::script('common/icheck/icheck.min.js') }}
        <!-- Skycons -->
        {{ Html::script('common/skycons/skycons.js') }}
        <!-- Flot -->
        {{ Html::script('common/flot/jquery.flot.js') }}
        {{ Html::script('common/flot/jquery.flot.pie.js') }}
        {{ Html::script('common/flot/jquery.flot.time.js') }}
        {{ Html::script('common/flot/jquery.flot.stack.js') }}
        {{ Html::script('common/flot/jquery.flot.resize.js') }}
        <!-- Flot plugins -->
        {{ Html::script('common/flot-orderbars/js/jquery.flot.orderBars.js') }}
        <!-- JQVMap -->
        {{ Html::script('common/jqvmap/dist/jquery.vmap.js') }}
        {{ Html::script('common/jqvmap/dist/jquery.vmap.world.js') }}
        {{ Html::script('common/jqvmap/dist/jquery.vmap.sampledata.js') }}
        <!-- bootstrap-daterangepicker -->
        {{ Html::script('common/moment/min/moment.min.js') }}
        {{ Html::script('common/bootstrap-daterangepicker/daterangepicker.js') }}
        <!-- Custom Theme Scripts -->
        {{ Html::script('admin/js/custom.min.js') }}
    </body>
</html>
