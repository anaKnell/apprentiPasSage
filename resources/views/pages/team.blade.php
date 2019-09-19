@extends('layouts.master')

@section('title', "membre")

@section('content')
<div id="banOneTeam" class="container-fluid ban"></div>
{{--Prestations--}}
<section class="mr-5 ml-5">
  <div class="ml-2 mr-2">
      @foreach ($oneTeam as $membre) 
          @include('pages.team.oneTeam', compact('oneTeam'))
      @endforeach
  </div>
</section>
{{--ENDPrestations--}}

@endsection
