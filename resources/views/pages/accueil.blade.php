@extends('layouts.master')

@section('title', "Accueil")

@section('content')

<p>
{{--	@foreach($categorie as $cat)
	@foreach($cat->getCategorie as $nameCat)
	<p>id {{$cat->categories_id}}: img= {{$cat->categories_img}} -> name= {{$nameCat->categories_name}}</p>
	@endforeach
	@endforeach--}}
</p>

<div class="block d-flex row">
	<div class="blockA col-sm-1"></div>
	<div class="titre col-sm-2 text-right">
		<h1 class="m-1" id="nosPrestations">Nos prestations</h1>
	</div>
	@foreach($categorie as $cat)
	@foreach($cat->getCategorie as $nameCat)
	<div class="blockB col-sm-9 d-inline-flex">
		<div class="card m-1" id="cardPrestation" style="width: 15rem;">
			<img class="card-img-top" src="img/{{$cat->categories_img}}" alt="{image}">
			<div class="card-body cardPrestation">
				<h1 class="card-text">{{$nameCat->categories_name}}</h1>
				<i class="fas fa-atom"></i>
				<a href="" class="btn btn-warning">LINK{{--{{$cat->link}}--}}</a>
			</div>
		</div>
	</div>
</div>
@endforeach
@endforeach

{{--Interline--}}
<div class="row" id="interlineA" style="height: 100px; background-color:#d5bafc;">
</div>
{{--EndInterline--}}
{{--banniere asso--}}
<div id="ban" class="container-fluid m-t-1 ban">
	<h1 id="titreAssociation" style="box-sizing:border-box;">L'association</h1>
</div>
{{--ENDbanniere asso--}}
{{--ASSOCIATION--}}
<div class="block d-flex row m-2" id="blockAssociation"> 
	<div class="card text-center m-5">
		<div class="card-header">
			<ul class="nav nav-pills card-header-pills">
				<li class="nav-item m-4"><h4 id="evenementAssociation"class="textDecoration">Evènements</h4></li>
				<li class="nav-item m-4"><h4 id="descriptionAssociation" >Description</h4></li>
				<li class="nav-item m-4"><h4 id="statutAssociation">Statut</h4></li>
			</ul>
		</div>
		<div class="card-body">
			<div id="textEvenement">
				<h5 class="card-title">Special title treatment</h5>
				<p class="card-text text-center" >Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
				<a href="#" class="btn btn-warning">Go somewhere</a>
			</div>
			<div id="textDescription" class="displayNone">
				<h5 class="card-title">Special title treatment</h5>
				<p class="card-text text-center">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
				<a href="#" class="btn btn-warning">Go somewhere</a>
			</div>
			<div id="textStatut" class="displayNone">
				<h5 class="card-title">Special title treatment</h5>
				<p class="card-text text-center">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
				<a href="#" class="btn btn-warning">Go somewhere</a>
			</div>
		</div>
	</div>
</div>
</div>
{{--END-ASSOCIATION--}}

{{--EndInterline--}}

{{--banniere team--}}
<div id="banTeam" class="container-fluid">
	<h1 id="titreTeam" style="box-sizing:border-box;">Notre équipe</h1>
</div>
{{--ENDbanniere team--}}

{{--L'équipe--}}
<div class="container">
	<ul class="list-inline mx-auto">
		<li class=" list-inline-item m-1"><button type="button" class="buttonThrombi btn btn-warning btn-border rounded" id="teamoffice">Bureau</button></li>
		<li class=" list-inline-item m-1"><button type="button" class="buttonThrombi btn btn-outline-warning" id="teamCoordonnateur">Coordonnateurs</button></li>
		<li class=" list-inline-item m-1"><button type="button" class="buttonThrombi btn btn-outline-warning" id="teamMembre">Membres</button></li>
	</ul>
</div>
{{--@foreach ($team as $user)--}}
<div class="contenuThrombi m-5">
	<img class="imageThrombi A"src="img/remy-1.jpg" alt="photo de {nom prénom} ">
	<div class="m-5 textThrombi B">{Nom Prénom}</div>
</div>
{{--ENDL'équipe--}}
{{--banniere team--}}
<div id="banTeamScience" class="container-fluid">
	<h1 id="titreTeamScience" class="text-right" style="box-sizing:border-box;">Comité scientifique</h1>
</div>
{{--ENDbanniere team--}}
{{--teamScientifique--}}
{{--ENDTeamScientifique--}}
{{--banniere coup de coeur--}}
<div class="container-fluid m-t-1 ban">
	<h1 id="titreAssociation" style="box-sizing:border-box;">Coup de coeur</h1>
</div>
{{--ENDbanniere coup de coeur--}}

{{--Trapèze--}}
<div class=" row m-3" style="box-sizing:content-box;">
	<div class="col-1"></div>
	<div class="col-3" id="essaiLeft"></div>
	<div class="col-4 border border-light m-2 parallelogramme"></div>
	<div class="col-3"></div>
	<div class="col-1"></div>
</div>
{{--ENDTrapèze--}}

{{--Interline--}}
<div class="row" id="interlineB" style="height: 100px; background-color:white;"></div>
@endsection

