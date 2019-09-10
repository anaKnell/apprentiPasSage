@extends('layouts.master')

@section('title', "Accueil")

@section('content')

{{--Prestations--}}
<div class="block d-flex row">
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
{{--Interline--}}
<div class="row" id="interlineA" style="height: 100px; background-color:#d5bafc;">
</div>
{{--EndInterline--}}

{{--banniere asso--}}
<div id="ban" class="container-fluid m-t-1 ban">
	<h1 id="titreAssociation" style="box-sizing:border-box;">L'association</h1>
</div>
{{--ENDbanniere asso--}}

{{--ASSOCIATION--}}
@include('pages.accueil.association-accueil');
{{--END-ASSOCIATION--}}

{{--banniere team--}}
<div id="banTeam" class="container-fluid">
	<h1 id="titreTeam" style="box-sizing:border-box;">Notre équipe</h1>
</div>
{{--ENDbanniere team--}}

{{--TEAM--}}

<div class="container d-flex align-items-center">
	<ul class="list-inline mx-auto">
		<li class=" list-inline-item m-1"><button type="button" class="buttonThrombi btn btn-warning btn-border rounded" id="teamoffice">Bureau</button></li>
		<li class=" list-inline-item m-1"><button type="button" class="buttonThrombi btn btn-outline-warning" id="teamCoordonnateur">Coordonnateurs</button></li>
		<li class=" list-inline-item m-1"><button type="button" class="buttonThrombi btn btn-outline-warning" id="teamMembre">Membres</button></li>
	</ul>
</div>
<div class="m-1 col-md themed-grid-col">
		<div class="row">
@foreach($team as $membre)
	@include('pages.accueil.team-accueil', compact($membre))
@endforeach
	</div>

<div id="banTeamScience" class="container-fluid">
	<h1 id="titreTeamScience" class="text-right" style="box-sizing:border-box;">Comité scientifique</h1>
</div>


{{--End TEAM--}}
<div class="container-fluid m-t-1 ban">
	<h1 id="titreAssociation" style="box-sizing:border-box;">Coup de coeur</h1>
</div>
{{--ENDbanniere coup de coeur--}}

{{--Trapèze--}}
<div class=" row m-3" style="box-sizing:content-box;">
	<div class="col-1"></div>
	<div class="col-3" id="essaiLeft"></div>
	<div class="col-4 border border-light m-2 parallelogramme"></div>
	<div class="col-3"></div>
	<div class="col-1"></div>
</div>
{{--ENDTrapèze--}}

{{--Interline--}}
<div class="row" id="interlineB" style="height: 100px; background-color:white;"></div>
@endsection

