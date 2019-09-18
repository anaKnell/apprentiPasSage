@extends('layouts.master')

@section('title', "Prestation")

@section('content')


{{--banniere asso--}}
<div id="banPresta" class="container-fluid ban"></div>
{{--ENDbanniere asso--}}
<section class='mx-5 mr-5 mt-3 mb-3'>
	
		@include('pages.prestation.prestation-prestations', compact('onePresta'))
	
</section>



@endsection


