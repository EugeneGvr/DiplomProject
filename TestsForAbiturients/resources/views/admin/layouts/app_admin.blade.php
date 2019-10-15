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
    <link href="{{ asset('css/admin/app_admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/admin_popup.css') }}" rel="stylesheet">
</head>
<body class="sidebar-mini" style="height:auto;">
  <div class = "popup-background"></div>
  <div class = "popup">
{{--      <div class="content"></div>--}}
{{--      <div class="action">--}}
{{--          <form class="" action="{{route('requests.destroy', 0)}}" method="post">--}}
{{--              <input type="hidden" name="_method" value="DELETE">--}}
{{--              {{csrf_field()}}--}}
{{--              <button type="submit" class="btn btn-primary yes">Да</button>--}}
{{--          </form>--}}
{{--          <button class="btn btn-primary">Нет</button>--}}
{{--      </div>--}}
  </div>
  <div class="wrapper">
      @include('admin.parts.toolbar')
      @include('admin.parts.sidebar')
{{--    <div class="main card">--}}
{{--        @yield('content')--}}
{{--    </div>--}}
      <div class="content-wrapper" >

      </div>
  </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
