<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('app.name', 'Prabha') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition {{ config('adminlte.theme') }} sidebar-mini">
<div class="wrapper">
    @include('layouts.backend.header')

    @include('layouts.backend.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
            <!-- Content Header (Page header) -->
          <section class="content-header">
           @yield('content')
          </section>
          <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    @include('layouts.backend.footer')
</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/backend.js')}}"></script>
</body>
</html>