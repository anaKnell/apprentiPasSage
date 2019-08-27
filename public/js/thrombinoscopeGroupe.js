$('.teamOffice').on("click", function(){
	$('.teamGroupOffice').css("transform","scale(1.5)");
});


function btnEvenement(){
	$('#evenementAssociation').on('click', function(){
	$(this).next().addClass('textDecoration');
	$('#descriptionAssociation, #statutAssociation').next().removeClass('textDecoration');
	$("#textEvenement").removeClass('displayNone');
	$("#textDescription, #textStatut").addClass('displayNone');
});
}

function btnDescrisption(){
	$('#descriptionAssociation').on('click', function(){
	$(this).next().addClass('textDecoration');
	$('#evenementAssociation, #statutAssociation').next().removeClass('textDecoration');
	$("#textEvenement, #textStatut").addClass('displayNone');
	$("#textDescription").removeClass('displayNone');
});
}

function btnStatut(){
	$('#statutAssociation').on('click', function(){
	$(this).next().addClass('textDecoration');
	$('#evenementAssociation, #descriptionAssociation').next().removeClass('textDecoration');
	$("#textEvenement,textDescription").addClass('displayNone');
	$("#textStatut").removeClass('displayNone');
});
}

$(document).ready(function(){
	btnEvenement();
	btnDescrisption();
	btnStatut();
});

