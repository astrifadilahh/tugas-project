<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="blue">
	<!--@include('Layouts.sidebar')
	<div class="container">
		@yield('content')
	</div> -->

	

	<header class="main-header">
		@include('Layouts.main-header')
	</header>

	<aside class="main-sidebar">
		@include('Layouts.main-sidebar')
	</aside>

	<div class="content-wrapper">
		@yield('content')
	</div>

	<footer class="main-footer">
		@include('Layouts.main-footer')
	</footer>

</body>
</html>