<div id="sectionEvent" class="mr-5 ml-5" style="height:100%;">
  <div class="row m-0">
    <div class="col col-sm-3 m-3">
      @if($info->evenement_img == null)
      <img class="imgPresta" src="/img/team/apprentispassages_logo_renard.png" alt="photo de l'evenement {{$info->evenement_titre}}" style="width:150px;">
      @else
      <img class="imgPresta " src="/img/event/{{$info->evenement_img}}" alt="photo de l'evenement de{{$info->evenement_titre}}" style="width:150px;">
      @endif
   </div>
   <div class="col m-3" style="width:100%;">
     <h1 class="titreH1prestation">{{$info->evenement_titre}}</h1>
   </div>
 </div>

 <div class="row m-0">
  <div class="col-12 col-sm-6 mt-2 mb-2 border rounded">
  	<h2 class="titreH2prestation">Informations</h2>
  	<p>{!!$info->evenement_text!!}</p>
  </div>
  <div class="col-12 col-sm-6 mt-2 mb-2" style="width:100%;min-height:300px ">
    <h2 class="titreH2prestation  m-auto">Pour quand?</h2>
    <h3 class="titreH3prestation  m-auto">{{$info->evenement_date}}</h3>
  </div>
</div>
<div class="row m-0">
@if($info->evenement_doc !== null)
  <div class="col mt-2 mb-2" style="width:100%;">
    <h2 class="titreH2prestation">Document à télécharger</h2>
    <a href="{{$info->evenement_doc}}" download>
     <img src="/img/document.png" alt="logo document" style="width:70px;">
   </a>
 </div>
@endif
</div>

</div>

