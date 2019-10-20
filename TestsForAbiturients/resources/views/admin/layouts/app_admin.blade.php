<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/admin/admin_popup.css') }}" rel="stylesheet">--}}
</head>

<body class="sidebar-mini" style="height: auto;">
<div class="wrapper" id="app">
    @include('admin.parts.toolbar')
    @include('admin.parts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 266px;">
        <router-view></router-view>
{{--        @yield('content')--}}
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
        @include('admin.parts.footer')
    <div id="sidebar-overlay"></div></div>
<!-- ./wrapper -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
