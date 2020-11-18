<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="index.php?P=home"><img class="Logo" src="<?=PUBLIC_DIR."pizza.png"?>">Pizzéria</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php?P=home">Főoldal</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="modal" data-target="#loginModal" href="index.php?P=login">Bejelentkezés</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="modal" data-target="#registerModal" href="index.php?P=register">Regisztráció</a>
			</li>
		</ul>
	</div>
</nav>