<div class="col-sm themed-grid-col">
	<div class="m-2 d-flex align-items-center" style="width: 14rem; height: 14rem;">
		<div class="d-flex flex-column">
			@if($membre->membre_photo == null)
			<img class="imageThrombi A"src="img/team/apprentispassages_logo_renard.png">
			@endif
		<img class="imageThrombi A"src="img/{{$membre->membre_photo}}" alt="photo de {{$membre->membre_nom}}">
		<h3 class="m-1 textThrombi B">{{$membre->membre_nom}} {{$membre->membre_prenom}}</h3>
	</div>
	</div>
</div>