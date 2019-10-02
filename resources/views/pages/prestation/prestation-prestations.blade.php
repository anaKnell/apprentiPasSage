@foreach($onePresta as $prestation)
@foreach($prestation->getPlusPresta as $aboutPresta)

<div class="row">
  <div class="col-xs-12 col-sm-3 m-auto">
  	<img class="imgPresta m-auto" src="/img/team/apprentispassages_logo_renard.png" alt="photo  renard logo de l'association">
  </div>
  <div class="col-xs-12 col-sm-5 ">
	   <h1 class="titreH1prestation">{{$aboutPresta->prestations_nom}}</h1>
  </div>
  <div class="col-xs-12 col-sm-4 m-auto">
  	<h2 class="titreH2prestation">Pour quel type de public?</h2>
  	<h3 class="titreH3prestation">{{$aboutPresta->prestations_participants}}</h3>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-8 border rounded">
  	<h2 class="titreH2prestation">Informations</h2>
  	<p>{!!$aboutPresta->prestations_description!!}</p>
  </div>
  <div class="col-xs-12 col-sm-4">
	 <h2 class="titreH2prestation">L'objectif:</h2>
	 <h3 class="titreH3prestation">{{$aboutPresta->prestations_objectifs}}</h3>
  </div>
</div>

<div class="row">
  <div class="col-12 col-sm-8 border rounded">
    <h2 class="titreH2prestation">Cahier des charges:</h2>
    {!!$aboutPresta->prestations_cahierdescharges!!}
  </div>
  <div class="col-12 col-sm-4">
  	<h2 class="titreH2prestation" >Prix:</h2>
  	<h3 class="titreH3prestation" id="prix">{!!$aboutPresta->prestations_prix!!}</h3>
  </div>
</div>
@endforeach
@endforeach

