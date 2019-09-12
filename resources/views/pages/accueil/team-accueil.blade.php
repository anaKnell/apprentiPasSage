<div class="col-sm themed-grid-col">
	<div class=" d-flex align-items-center cardTrombi" style="width: 14rem; height: 18rem;">

		<div class="d-flex flex-column">

				<img class="imageThrombi m-auto
				@foreach($membre->getMembre as $status)
				  {{$status->status_nom}}	
				@endforeach
				"
				@if($membre->membre_photo == null)
					src="img/team/apprentispassages_logo_renard.png" alt="photo d'avatar">
				@else
					src="img/team/{{$membre->membre_photo}}" alt="photo de {{$membre->membre_nom}}">
				@endif
		<h3 class="m-1 textThrombi text-center">{{$membre->membre_prenom}} {{$membre->membre_nom}}</h3>

	</div>
	</div>
</div>