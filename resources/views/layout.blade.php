<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<title>@yield('title','burgossoft')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<script src="{{ mix('js/app.js') }}" defer></script>
	@stack('scripts')
</head>
<body>
  <div id="app" class="d-flex flex-column h-creen bg-dark ">
  	<div class="justify-content-between">
  	<header>
		@include('partials.nav')
		@include('partials.session-status')
	</header>
	   @if(session()->has('success'))
	    <div class="container">
	        <div class="alert alert-success">{{ session('success') }}</div>
	    </div>
       @endif
       	   @if(session()->has('warning'))
	    <div class="container">
	        <div class="alert alert-warning">{{ session('warning') }}</div>
	    </div>
       @endif
	<main class="py-3">
		@yield('content')
	</main>

@yield('pie')
	<div class="pie text-center py-3 shadow">
		<footer>
		{{config('app.name') }} | Copyringt @ {{date('Y')}}
		</footer>
	</div>
	</div>
  </div>
</body>
</html>