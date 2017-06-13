<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="/css/bootstrap_4.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<div class="wrapper">

		@include('layouts.header') 

		@yield('content')

		@include('layouts.footer') 
	</div>


</body>
</html>

<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery-2.2.3.min.js"></script>
<script src="/js/bootstrap_4.min.js"></script>
