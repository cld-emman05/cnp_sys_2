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

		@if(auth::user()->user_type == 1 || auth::user()->user_type == 3)
    <div class="sidebar" data-color="blue">
		@elseif(auth::user()->user_type == 2 || auth::user()->user_type == 4)
		<div class="sidebar" data-color="yellow">
		@elseif(auth::user()->user_type == 5 || auth::user()->user_type == 6)
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

		@if(Request:: is(@Auth::user()->user_types->type))
		<div class="panel-header panel-header-lg">
				<canvas id="bigDashboardChart"></canvas>
			</div>

		@else
		<div class="panel-header panel-header-sm">
		</div>
		@endif

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
