<!DOCTYPE html>
<!--
================================================
| Créé par : Yanick Lafontaine                 |
| Contact  : yanicklafontaine@hotmail.com      |
================================================
Copyright 2011 - 2016 Easy CMS - Montréal
-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="img/favicon.png">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<title>{{ $page_title or "Easy CMS" }}</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="{{ asset("EasyCMS/css/EasyCMS.css") }}">
</head>
<body>
<div class="container">
  <div class="row row-margin">
    <div class="col-md-4 pull-left"><a class="brand" href="{{ url('/') }}"><img src="{{ asset("EasyCMS/img/logo.png") }}" alt="Logo"></a></div>
    <div class="col-md-4 pull-right" id="logo-text">@yield('intro')</div>
  </div>
  @include('template.frontend.menu')
  @include('template.frontend.carousel')
  <hr>
  <div class="row"> 
  	@yield('content')
    @include('template.frontend.sidebar') 
  </div>
  @include('template.frontend.footer') 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
<script>
$('.carousel').carousel({
  interval: 5000
})
</script>
</body>
</html>
