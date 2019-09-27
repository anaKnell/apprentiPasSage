
<div class="col-12 col-sm-6 col-lg-3">
	<div style="width: 18rem; height: 18rem;">
		<a href="{{route('teamController.getOneteam', ['teamId'=>$membre->membre_id])}}">
			<div class="d-flex flex-column">

				<img class="imageThrombi m-auto
				@foreach($membre->getMembre as $status)
				  {{$status->status_desc}}	
				@endforeach
				"
				@if($membre->membre_photo == null)
					src="img/team/apprentispassages_logo_renard.png" alt="photo d'avatar">
				@else
					src="img/team/{{$membre->membre_photo}}" alt="photo de {{$membre->membre_nom}}">
				@endif
			</a>
			<h3 class="mt-3 textThrombi text-center">{{$membre->membre_prenom}} {{$membre->membre_nom}}</h3>

			</div>
		
	</div>
</div>