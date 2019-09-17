
@foreach ($prestaCat as $categorie) 

@foreach($categorie->getCat as $prestation)

	{{$prestation->prestations_id}}
@foreach($prestation->getPlusPresta as $plusPresta)
	{{$plusPresta->prestations_nom}}
@endforeach
@endforeach

@endforeach

