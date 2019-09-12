
function borderGroup(){

	$('#TeamBureau').on("click",function(){
		$('.1').hadClass('select');
		$('.2,.3,.4,.5').removeClass('select');
		console.log('teamBureau');
	});
	$('#teamCoordonnateur').on("click",function(){
		$('.1').hadClass('select');
		$('.2,.3,.4,.5').removeClass('select');
		console.log('teamCoordonnateur');
	});
	$('#teamMembre').on("click",function(){
		$('.1,.3,.4,.5').removeClass('select');
		$('.3, .4').css("border", "10px solid green");
		console.log('teamMembre');
	});
	$('#teamCs').on("click",function(){
		$('.5').css("border", "10px solid pink");
		console.log('teamCs');
	});
}

	


////////////////////////////////////////////////////////

$(document).ready(function($) {
		borderGroup();

		$('#keywords').jQCloud(words, {
			colors: ["#f8eb3a",  "#ab6bd6", "#b7b5a1"],
  		width: 500,
  		height: 350,
  		autoResize:true,
  		fontSize: {
    		from: 0.1,
    		to: 0.02
  			}
});
});


