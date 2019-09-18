@extends('layouts.master')

@section('title', "Accueil")

@section('content')

{{--Prestations--}}
<section>
	<div class="block d-flex row">

			@foreach ($prestaCat as $categorie) 
			<div class="row">

					@include('pages.prestation.categories-prestation', compact('prestaCat'))
			@endforeach

		</div>
	</div>
</section>
{{--ENDPrestations--}}


@endsection
