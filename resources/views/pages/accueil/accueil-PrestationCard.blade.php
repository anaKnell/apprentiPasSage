	<div class="col">
	<div class="card d-flex align-items-center prestationCard mt-2" style="width: 15rem; height: 20rem;">
		<img class="card-img-top m-2" src="img/{{$cat->categories_img}}" alt=" image de la catégorie de prestation :{{$nameCat->categories_name}}" style="width: 7rem; height: 7rem;">
		<div class="card-body cardPrestation" style="height:11rem;">
			<h1 class="titlePrestation card-text text-center m-2" style="height:6rem;">{{$nameCat->categories_name}}</h1>
			<div class="m-auto" style="height: 3rem;">
			<a href="{{route('prestations.getCatPrestation', ['catId'=>$cat->categories_id])}}" class="btn btn-warning m-auto d-flex align-item-center " style="width:123px;">En savoir plus</a>
		</div>
		</div>
	</div>
</div>
