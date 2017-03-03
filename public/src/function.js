
//toggle le texte des formations & change le style du bouton
function toggleText(id)
{
	if($("#"+id).find((".formation-content")).hasClass("undisplayed"))
	{
		//bouton
		$("#"+id).find(".formation-middle").removeClass("hvr-radial-out");
		$("#"+id).find(".formation-middle").addClass("formation-middle-active");
		//texte
		$("#"+id).find((".formation-content")).removeClass("undisplayed");
		$("#"+id).find((".formation-content")).removeClass("holeOut");
		$("#"+id).find((".formation-content")).addClass("magictime swashIn");
	}
	else
	{
		//bouton
		$("#"+id).find(".formation-middle").addClass("hvr-radial-out");
		$("#"+id).find(".formation-middle").removeClass("formation-middle-active");
		//texte
		$("#"+id).find((".formation-content")).removeClass("swashIn");
		$("#"+id).find((".formation-content")).addClass("magictime holeOut");
		setTimeout(function(){
			$("#"+id).find((".formation-content")).addClass("undisplayed");
		}, 500
		);
	}

}