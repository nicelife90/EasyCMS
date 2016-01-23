<!DOCTYPE html>
<!--
=========================================================
| Créé par : Yanick Lafontaine							|
| Contact  : yanicklafontaine@hotmail.com  				|
| Pour     : Hippy Québec - Montréal       				|
=========================================================
Copyright (C) 2011 - 2016 Hippy Québec - Montréal
=========================================================
-->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Hippy Québec - {{ $page_title or "Hippy Québec" }}</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="{{ asset("bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="{{ asset("bower_components/AdminLTE/dist/css/AdminLTE.min.css") }}">
<link rel="stylesheet" href="{{ asset("bower_components/AdminLTE/dist/css/skins/skin-black.min.css") }}">
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper"> 
  
  <!-- Header --> 
  @include('template.header') 
  
  <!-- Sidebar --> 
  @include('template.sidebar') 
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> {{ $page_title or "Page Title" }} <small>{{ $page_description or null }}</small> </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content"> @yield('content') </section>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper --> 
  
  @include('template.footer') 
  
</div>
<!-- ./wrapper --> 

<!-- REQUIRED JS SCRIPTS --> 

<!-- jQuery 2.1.4 --> 
<script src="{{ asset("bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js")}}"></script> 
<!-- Bootstrap 3.3.5 --> 
<script src="{{ asset("bower_components/AdminLTE/bootstrap/js/bootstrap.min.js")}}"></script> 
<!-- App --> 
<script src="{{ asset("bower_components/AdminLTE/dist/js/app.min.js")}}"></script> 

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
