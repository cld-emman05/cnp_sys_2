@auth
{{session()->put('current', Auth::user()->id) }}

{{session()->put('user', DB::table('departments')
            ->join('employees', 'employees.department_id', '=', 'departments.id')
            ->select('departments.name')
            ->where('employees.user_id', '=', session()->get('current'))
            ->value('departments.name')) }}

{{
  session()->put('company', DB::table('customers')
            ->select('company')
            ->where('user_id', '=', session()->get('current'))
            ->value('customers.company'))
}}

@endauth

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

		@if((@auth == true && session()->get('user') == null)  || session()->get('user') == 'Administrator')
    <div class="sidebar" data-color="blue">
		@elseif(session()->get('user') == 'Sales' || session()->get('user') == 'Production')
		<div class="sidebar" data-color="yellow">
		@elseif(session()->get('user') == 'Purchasing' || session()->get('user') == 'Finance')
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
