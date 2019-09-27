<div class="border rounded p-5 hello  m-3">
	<div class="row">
		<div class="col-sm">
			<h5 class="border rounded bg-warning">{{$event->evenement_date}}</h5>
		</div>
		<div class="col-sm">
			<h5>{{$event->evenement_titre}}</h5>
		</div>
		<div class="col-sm">
		<a class="btn" href="{{route('eventController.getOneEvent', ['eventId'=>$event->evenement_id])}}">En savoir plus</a>
		</div>

	</div>
</div>
	
				
