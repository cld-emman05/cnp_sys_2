<!doctype html>
<html lang="en">

<head><!-- Navbar --><!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
	@include('headers.main')
	<title>CnP - @yield('title')</title>
</head>

<body>
	@guest

	<div class="wrapper">
		@else

		@if((@auth::user()->user_types->type == 'Customer'  || @auth::user()->user_types->type == 'Administrator'))
    <div class="sidebar" data-color="blue">
		@elseif(@auth::user()->user_types->type == 'Sales' || @auth::user()->user_types->type == 'Production'))
		<div class="sidebar" data-color="orange">
		@elseif(@auth::user()->user_types->type == 'Purchasing' || @auth::user()->user_types->type == 'Finance'))
		<div class="sidebar" data-color="green">
		@endif

             <!--
         Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
     -->
							@include('layout.sidebar')
		</div>
	</div>
</div>


	<div class="main-panel">
		@endguest
		@include('layout.topbar')

		<!--
		<div class="panel-header panel-header-lg">
				<canvas id="bigDashboardChart"></canvas>
			</div>
		-->

		<div class="panel-header panel-header-sm">
		</div>

			<div class="content">
				<div class="container-fluid">
						@yield('main-content')
					</div>
				</div>

				<footer class="footer">
					<div class="container-fluid">
						@include('layout.footer')
					</div>
				</footer>
			</div>
		</div>
</body>

</html>
