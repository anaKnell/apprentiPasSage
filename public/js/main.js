
function borderGroup(){

	$('#teamoffice').on("click",function(){
		$('.A').css("border", "20px solid #b488f7").css("transform","scale(1.2)");
		$('.B').css("transform","scale(1.2)");
	});
}



////////////////////////////////////////////////////////
$(document).ready(function(){
	borderGroup();
});