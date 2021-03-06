<div class="row">
  <div class="col-3 p-auto">
    @if($membre->membre_photo == null)
      <img class="imageOneTeam" src="/img/team/apprentispassages_logo_renard.png" alt="photo de l'avatar de l'association ApprentiPasSage">
    @else
  	   <img class="imageOneTeam" src="/img/team/{{$membre->membre_photo}}" alt="photo de {{$membre->membre_nom}} {{$membre->membre_prenom}} de l'association ApprentiPasSage">
    @endif
  </div>
  <div class="col-5">
	   <h1 class="titreH1prestation pt-5">{{$membre->membre_prenom}} {{$membre->membre_nom}}</h1>
  </div>
    <div class="col-4 m-auto">
    <h2 class="titreH2prestation pt-5">Rôle dans l'association</h2>
    @foreach($membre->getMembre as $status)
    <h3 class="titreH3prestation">{{$status->status_nom}}<br></h3>
    @endforeach
  </div>
</div>

<div class="row">
  <div class="col-12 col-sm-8 mt-3 mb-3">
    <h2 class="titreH2prestation pl-3">&Agrave; propos de moi:</h2>
  	<div class="pl-5">{!!$membre->membre_description!!}</div>
  </div>
  <div class="col-12 col-sm-4 border-left border-warning m-auto">
	  <h2 class="titreH2prestation">Me contacter:</h2>
    <h3 class="titreH3prestation">{{$membre->membre_tel}}</h3>
    <h3 class="titreH3prestation">{{$membre->membre_email}}</h3>
  </div>
</div>
