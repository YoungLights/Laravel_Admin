<nav class="nav">
	<a href="/dashboard" class="nav-logo">
		<img src="{{asset('img/logo/yl-logo-blue-reduce.png')}}">
	</a>
	<div class="nav-links">
		<div class="nav-link-group">
			<h4>Allgemein</h4>
			<a href="/dashboard"><i class="fa-solid fa-file"></i>Dashboard</a>
			<a href="/dashboard"><i class="fa-solid fa-chart-line"></i>Analytics</a>
		</div>
		<div class="nav-link-group">
			<h4>Webseite</h4>
			<a href="#"><i class="fa-solid fa-file"></i>Seiten</a>
			<a href="#"><i class="fa-solid fa-layer-group"></i>Bereiche</a>
			<a href="#"><i class="fa-solid fa-swatchbook"></i>Templates</a>
		</div>
		<div class="nav-link-group">
			<h4>Content</h4>
			<a href="#"><i class="fa-solid fa-pen"></i>Texte</a>
			<a href="#"><i class="fa-solid fa-image"></i>Bilder</a>
			<a href="#"><i class="fa-solid fa-video"></i>Videos</a>
		</div>
		<div class="nav-link-group">
			<h4>Einstellungen</h4>
			<a href="#"><i class="fa-solid fa-mug-hot"></i>Webseite</a>
			<a href="#"><i class="fa-solid fa-gear"></i>Config</a>
			<a href="#"><i class="fa-solid fa-magnifying-glass"></i>SEO</a>
			<a href="#"><i class="fa-solid fa-shuffle"></i>Tracking</a>
		</div>
	</div>
	<div class="nav-buttons">
		<a href="#"><i class="fa-solid fa-circle-question"></i>Hilfe</a>
		<form action="/logout" method="post" class="nav-logout">
			@csrf
			<button><i class="fa-solid fa-right-from-bracket"></i>logout</button>
		</form>
	</div>

</nav>