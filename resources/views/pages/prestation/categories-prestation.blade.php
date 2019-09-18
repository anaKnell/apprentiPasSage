


@foreach($categorie->getCat as $prestation)

@foreach($prestation->getPlusPresta as $plusPresta)
<div class="card d-flex align-items-center" style="width: 18rem;">
  <img class="card-img-top" src="img/prestation/{{$prestation->prestations_img1}}" alt="Card image cap">
	<div class="card-body">
    <h5 class="card-title">{{$plusPresta->prestations_nom}}</h5>
	<p class="card-text">{{$plusPresta->prestations_objectifs}}</p>
	<p class="card-text">{{$plusPresta->prestations_participants}}</p>
	<a href="{{route('prestation.getOnePrestation', ['prestaId'=>$prestation->prestations_id])}}" class="btn btn-warning d-flex align-items-center" style="width: 10rem;">En savoir plus</a>


  </div>
</div>
@endforeach
@endforeach
