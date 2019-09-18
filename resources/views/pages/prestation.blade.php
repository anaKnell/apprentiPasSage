@extends('layouts.master')

@section('title', "Accueil")

@section('content')

{{--Prestations--}}
<section>


				@include('pages.prestation.prestation-prestations', compact('onePresta'))


</section>
{{--ENDPrestations--}}


@endsection


