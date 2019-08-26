@extends('pages.accueil')

@section('cardPrestation')
{{--@foreach ($users as $user)--}}
<div class="card m-1" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="{image}">
  <div class="card-body">
    <h1 class="card-text">{TITRE}{{--{{ $user->id }}--}}</h1>
    <i class="fas fa-atom"></i>
    <a href="">{LINK}</a>
  </div>
</div>
{{--@endforeach--}}
@endsection