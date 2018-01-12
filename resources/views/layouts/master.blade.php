<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Styles -->
        {{ Html::style('common/bootstrap/dist/css/bootstrap.min.css') }}
        {{ Html::style('common/font-awesome/css/font-awesome.min.css') }}
        {{ Html::style('common/nprogress/nprogress.css') }}
        {{ Html::style('common/animate/animate.min.css') }}
        {{ Html::style('/admin/css/custom.min.css') }}
    </head>
    <body class="login">
        <div>
            @yield('content')
        </div>
    </body>
</html>
