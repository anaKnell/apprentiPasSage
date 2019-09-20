@extends('layouts.master')

@section('title', "Prestations")

@section('content')

{{--Prestations--}}
<section class="block" style="height: 800px;">
	<div class="d-flex row ml-2 mr-2">

			@foreach ($prestaCat as $categorie) 

					@include('pages.prestation.categories-prestation', compact('prestaCat'))

			@endforeach
	</div>
</section>
{{--ENDPrestations--}}

<div id="interlineA" style="height: 100px;"></div>
@endsection
