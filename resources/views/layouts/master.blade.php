<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    @yield('title-app')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/vendors.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/testeng.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/application.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('vendors/jquerydatatable/dataTables.bootstrap4.min.css')}}"/>
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    @yield('css-js-head')

</head>
<body>

<div class="aw-layout-page">

    @include("layouts.fragments.cabecalho")

    <div class="page-header">
        <div class="container-fluid">
            @yield('title-page')
        </div>
    </div>

    <div class="container-fluid">
        @yield('content')
    </div>
    </section>
    @include("layouts.fragments.footer")

</div>


<script src="{{URL::asset('js/template/vendors.min.js')}}"></script>
<script src="{{URL::asset('js/template/testeng.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/jquerydatatable/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/jquerydatatable/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{URL::asset('vendors/jquery-validator/jquery.validate.min.js')}}"></script>
<script src="{{URL::asset('vendors/jquerymask/jquery.mask.js')}}"></script>
<script src="{{URL::asset('js/testeng-config-mask.js')}}"></script>

@yield('js-file')

<script type="text/javascript" src="{{URL::asset('js/testeng-tableconfig.js')}}"></script>
{{--<script src="{{ asset('js/app.js') }}"></script>--}}

</body>
</html>
