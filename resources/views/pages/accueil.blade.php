@extends('layouts.master')

@section('title', "Accueil")

@section('content')

{{--Prestations--}}
<section>
	<div class="block d-flex row m-0 p-0">
		<div class="blockA col-md-1"></div>
		<div class="titre col-md-2 text-right">
			<h1 class="m-1" id="nosPrestations">Nos prestations</h1>
		</div>
		<div class="col-md-9 themed-grid-col">
			<div class="row">
				@foreach($categorie as $cat)
					@foreach($cat->getCategorie as $nameCat)
						@include('pages.accueil.accueil-PrestationCard', compact($cat))
					@endforeach
				@endforeach
			</div>
		</div>
	</div>
</section>
{{--ENDPrestations--}}
{{--Interline--}}
	<div id="interlineA" style="height: 100px; background-color:#d5bafc;">
	</div>
{{--EndInterline--}}

{{--banniere asso--}}
	<div id="ban" class="container-fluid m-t-1 ban">
		<h1 id="titreAssociation" style="box-sizing:border-box;">L'association</h1>
	</div>
{{--ENDbanniere asso--}}

{{--ASSOCIATION--}}
<section id="sectionAssociation" class="container">
	@include('pages.accueil.association-accueil')
</section>
{{--END-ASSOCIATION--}}

{{--banniere team--}}
	<div id="banTeam" class="container-fluid">
		<h1 id="titreTeam" style="box-sizing:border-box;">Notre équipe</h1>
	</div>
{{--ENDbanniere team--}}

{{--TEAM--}}
	<div class="container d-flex align-items-center">
		<ul class="list-inline mx-auto">
			<li class=" list-inline-item m-1">
				<button type="button" class="btn border rounded buttonTeam" id="TeamBureau">Bureau</button>
			</li>
			<li class=" list-inline-item m-1">
				<button type="button" class="btn border rounded buttonTeam" id="teamCoordonnateur">Coordonnateur(rice)s</button>
			</li>
			<li class=" list-inline-item m-1">
				<button type="button" class="btn border rounded buttonTeam" id="TeamAnimation">Animateur(rice)s</button>
			</li>
			<li class=" list-inline-item m-1">
				<button type="button" class="btn border rounded buttonTeam" id="teamMembre">Membres</button>
			</li>
			<li class=" list-inline-item m-1">
				<button type="button" class="btn border rounded buttonTeam" id="teamCs">Conseil scientifique</button>
			</li>
		</ul>
	</div>
		<div class="row">
			@foreach($team as $membre)
				@include('pages.accueil.team-accueil', compact($membre))
			@endforeach
		</div>

{{--End TEAM--}}
{{--Interline--}}
	<div id="interlineC" style="height: 100px; background-color:white;"></div>
{{--Coup de coeur--}}
<section id="coupDeCoeur">
	<div class="m-t-1 ban2">
		<h1 id="titreAssociation" class="float-right" style="box-sizing:border-box;">Coup de coeur</h1>
	</div>
	
@include('pages.accueil.coupDeCoeur-accueil',compact($hello))
</section>

{{--ENDcoup de coeur--}}

{{--Interline--}}

@endsection

