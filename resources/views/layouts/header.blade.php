<header class="sticky-top">
	<nav class="navbar navbar-expand-lg navbar-light sticky-top d-flex">
		<a class="navbar-brand" href="{{route('Accueil')}}">
			<img id="logo" src="/img/fox_logo.png" alt="logo association">
		</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item m-1">
						<a class="nav-link text-light" href="{{route('Accueil')}}#sectionAssociation">Qui sommes-nous?</a>
					</li>
					<li class="nav-item m-1">
						<a class="nav-link text-light" href="{{route('Accueil')}}#nosPrestations">Prestations</a>
					</li>
					<li class="nav-item m-1">
						<a class="nav-link text-light" href="{{route('Accueil')}}#sectionAssociation">Evènements</a>
					</li>
					<li class="nav-item dropdown m-1">
						<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Plus
						</a>
						<div class="dropdown-menu m-t-2" aria-labelledby="navbarDropdown">
							<a class="dropdown-item  text-black" href="#">Galerie photos</a>
							<a class="dropdown-item  text-black" href="{{route('Accueil')}}#coupDeCoeur">Nos coups de coeur</a>
						</div>
					</li>
				</ul>
				<div class="nav-item active border rounded justify-content-between">
					<a class="nav-link  text-light" href="{{route('Contact')}}" id="contactNav">Nous contacter</a>
				</div>
		</div>

	</nav>
</header>