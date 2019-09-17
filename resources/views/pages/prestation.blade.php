@extends('layouts.master')

@section('title', "Accueil")

@section('content')

{{--Prestations--}}
<section>
	<div class="block d-flex row">
		<div class="blockA col-md-1"></div>
		<div class="titre col-md-2 text-right">
			<h1 class="m-1" id="nosPrestations">Nos prestations</h1>
		</div>
		<div class="col-md-9 themed-grid-col">
			<div class="row">

					@include('pages.prestation.categories-prestation', compact('prestaCat'))

			</div>
		</div>
	</div>
</section>
{{--ENDPrestations--}}


@endsection

