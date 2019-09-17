
	<div class="card d-flex align-items-center prestationCard" style="width: 15rem; height: 18rem;">
		<img class="card-img-top m-2" src="img/{{$cat->categories_img}}" alt=" image de la catégorie de prestation :{{$nameCat->categories_name}}" style="width: 7rem; height: 7rem;">
		<div class="card-body cardPrestation">
			<h1 class="titlePrestation card-text text-center m-2">{{$nameCat->categories_name}}</h1>
			<a href="{{route('prestation.getOnePrestation', ['catId'=>$cat->categories_id])}}" class="btn btn-warning d-flex align-items-center" style="width: 10rem;">En savoir plus</a>
		</div>
	</div>
