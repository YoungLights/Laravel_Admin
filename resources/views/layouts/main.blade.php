<!DOCTYPE html>
<html lang="en">
	<head>
		@include('includes.head')
	</head>
	<body>
		<main>
			@include('includes.nav')
			<div class="container">
				@include('includes.header')
				<section class="content">
					@yield('content')
				</section>
			</div>
		</main>
	</body>
</html>