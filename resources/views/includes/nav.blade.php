<nav class="nav">
	<a href="/dashboard" class="nav-logo">
		<img src="{{asset('img/logo/yl-logo-white-reduce.png')}}">
	</a>
	<div class="nav-links">
		<a href="/dashboard"><i class="fa-solid fa-file"></i>Dashboard</a>
		<a href="#"><i class="fa-solid fa-file"></i>Seiten</a>
		<a href="#"><i class="fa-solid fa-pen"></i>Texte</a>
		<a href="#"><i class="fa-solid fa-image"></i>Bilder</a>
		<a href="#"><i class="fa-solid fa-mug-hot"></i>Webseite</a>
		<a href="#"><i class="fa-solid fa-gear"></i>Config</a>
		<a href="#"><i class="fa-solid fa-magnifying-glass"></i>SEO</a>
	</div>
	<form action="/logout" method="post" class="nav-logout">
		@csrf
		<button>logout</button>
	</form>
</nav>