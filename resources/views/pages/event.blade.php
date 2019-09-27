@extends('layouts.master')

@section('title', "Evenement")

@section('content')

{{--Prestations--}}
<section id="banEvent" style="min-height:1024px">

			@foreach ($oneEvent as $info) 
					@include('pages.evenement.oneEvent-event', compact('oneEvent'))
			@endforeach

</section>

@endsection
