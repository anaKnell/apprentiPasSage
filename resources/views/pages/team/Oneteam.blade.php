<div class="row">
  <div class="col-12 m-auto border">
  	 <img class="imageThrombi" src="/img/team/{{$membre->membre_photo}}" alt="photo de {{$membre->membre_nom}} {{$membre->membre_prenom}} de l'association ApprentiPasSage" style="width:200px;">
  </div>
  <div class="col-12 col-md-6 border " style="width:100%;">
	   <h1 class="titreH1prestation">{{$membre->membre_prenom}} {{$membre->membre_nom}}</h1>
  </div>
</div>

<div class="row">
    <div class="col-12 border" style="width:100%;">
    <h2 class="titreH2prestation">Rôle dans l'association</h2>
    <h3 class="titreH3prestation">loremmmmmmmmmmmmmmmmmmmmmmmm</h3>
  </div>
</div>

<div class="row">
  <div class="col-12 col-sm-8 border rounded" style="width:100%;">
    <h2 class="titreH2prestation">&Agrave; propos de moi:</h2>
  	<p>{!!$membre->membre_description!!}</p>
  </div>
  <div class="col-12 col-sm-4 border" style="width:100%;">
	  <h2 class="titreH2prestation">Me contacter:</h2>
    <h3 class="titreH3prestation">{{$membre->membre_tel}}</h3>
    <h3 class="titreH3prestation">{{$membre->membre_email}}</h3>
  </div>
</div>
