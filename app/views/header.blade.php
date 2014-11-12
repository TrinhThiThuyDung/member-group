<!doctype html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>@yield('title')</title>
	<script type="text/javascript"></script>
	
	<link rel="shortcut icon" type="image/x-icon" href="{{Asset('/images/ico/favicon.ico')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Asset('/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{Asset('/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{Asset('/css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{Asset('/css/bootstrap-theme.min.css')}}">

	
	<script type="text/javascript" src = "{{Asset('/js/jquery-1.11.1.min.js')}}"></script>
	<script type="text/javascript" src = "{{Asset('/js/jquery-2.1.1.min.js')}}"></script>
	<script type="text/javascript" src = "{{Asset('/js/jquery-1.11.0.min.js')}}"></script>
	<script src = "{{Asset('/js/bootstrap.min.js')}}"></script>

	@yield('style')
</head>
<body>
	<div class="container">
		<div class="header"></div>
		   