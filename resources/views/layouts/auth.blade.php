<!DOCTYPE html>
<html lang="en">
	<head>
		@include('includes.head')
	</head>
	<body>
		<!-- AUTH CONTENT -->
		<section class="auth">
			<div class="auth-title">
				<img class="auth-logo" src="{{asset('img/logo/yl-logo-font-white.png')}}" alt="Young Lights Logo">
				<img class="auth-bg" src="{{asset('img/header/auth-header-login.jpg')}}" alt="Young Lights Admin">
			</div>
			<div class="auth-form">
				<div class="auth-help">
					<x-tooltip direction="left" text="Brauchst du Hilfe?">
						<a href="mailto:hello@younglights.de"><i class="fa-solid fa-circle-info"></i></a>
					</x-tooltip>
				</div>
				@yield('form')
			</div>
		</section>

		<!-- JAVASCRIPT -->
		<script src="{{asset('js/app.js')}}"></script>
		@yield('javascript')
	</body>
</html>