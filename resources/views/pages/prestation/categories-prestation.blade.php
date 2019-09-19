


@foreach($categorie->getCat as $prestation)

@foreach($prestation->getPlusPresta as $plusPresta)
<div class="col-12 col-sm-6 col-lg-4">
<div class="card cardPresta mt-sm-2 m-auto" style="width:17rem;">
  <img class="card-img-top" src="img/prestation/{{$prestation->prestations_img1}}" alt="Card image cap" style="height:6rem;">
	<div class="card-body">
    <h2 class="titreH2prestation card-title text-center" style="height:5rem;">{{$plusPresta->prestations_nom}}</h2>
	<p class="textObjPrestation card-text border rounded p-2" style="height:11rem;">{{$plusPresta->prestations_objectifs}}</p>
	<p class="textPartPrestation card-text" style="height:4rem;">{{$plusPresta->prestations_participants}}</p>
	<a href="{{route('prestation.getOnePrestation', ['prestaId'=>$prestation->prestations_id])}}" class="btn btn-warning text-center" style="width: 10rem;">En savoir plus</a>
</div>
</div>
</div>

@endforeach
@endforeach
