<!doctype html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">

		<title>Sistema Pyscom - Inicio de sesión</title>

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>

		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">

		<link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    	<link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    	<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    	<link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    	<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />

    	<script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    	<script src="{{ asset('assets/js/config.js') }}"></script>

		@yield('extra-css')

	</head>
	<body>
		<div id="app">
			{{-- <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm">
				<div class="container">
					<div class="col-1">
						<a class="navbar-brand text-white" href="{{ route('login') }}">
							<img src="{{ asset('images/logo.png') }}" class="img-fluid">
						</a>
					</div>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse py-3" id="navbarSupportedContent">
						<!-- Left Side Of Navbar -->
						<ul class="navbar-nav me-auto">

						</ul>

						<!-- Right Side Of Navbar -->
						<ul class="navbar-nav ms-auto">
							<!-- Authentication Links -->
							@guest
							@if (Route::has('login'))
							<li class="nav-item">
								<a class="nav-link text-white" style="font-size: 16px;" href="{{ route('login') }}">Iniciar sesión</a>
							</li>
							@endif

							@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }}
								</a>

								<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
						@endguest
					</ul>
				</div>
			</div> --}}
		</nav>


		<main>
			@yield('content')
		</main>
	</div>

	<!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

@yield('extra-js')

</html>
