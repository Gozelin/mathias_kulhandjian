
//toggle le texte des formations & change le style du bouton
function toggleText(id)
{
	if($("#"+id).find(".top-box, .bot-box").hasClass("undisplayed"))
	{
		console.log(id);
		//bouton
		switch(id)
		{
			case "formation1":
				$("#"+id).find(".formation-middle").removeClass("hvr-radial-out-orange");
				break;
			case "formation2":
				$("#"+id).find(".formation-middle").removeClass("hvr-radial-out-green");
				break;
		}

		$("#"+id).find(".formation-middle").addClass(id+"-middle-active");
		//texte
		$("#"+id).find(".top-box, .bot-box").removeClass("undisplayed");
		$("#"+id).find(".top-box, .bot-box").removeClass("holeOut");
		$("#"+id).find(".top-box, .bot-box").addClass("magictime swashIn");
	}
	else
	{
		//bouton
		switch(id)
		{
			case "formation1":
				$("#"+id).find(".formation-middle").addClass("hvr-radial-out-orange");
				break;
			case "formation2":
				$("#"+id).find(".formation-middle").addClass("hvr-radial-out-green");
				break;
		}

		$("#"+id).find(".formation-middle").removeClass(id+"-middle-active");
		//texte
		$("#"+id).find(".top-box, .bot-box").removeClass("swashIn");
		$("#"+id).find(".top-box, .bot-box").addClass("magictime holeOut");
		setTimeout(function(){
			$("#"+id).find(".top-box, .bot-box").addClass("undisplayed");
		}, 500
		);
	}

}