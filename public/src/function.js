
//toggle le texte des formations
function toggleFormation(id)
{
	if($("#"+id).find(".top-box, .bot-box").hasClass("undisplayed"))
	{
		$("#"+id).find(".top-box, .bot-box").removeClass("undisplayed");
		$("#"+id).find(".top-box, .bot-box").removeClass("holeOut");
		$("#"+id).find(".top-box, .bot-box").addClass("magictime swashIn");
	}
	else
	{
		$("#"+id).find(".top-box, .bot-box").removeClass("swashIn");
		$("#"+id).find(".top-box, .bot-box").addClass("magictime holeOut");
		setTimeout(function(){
			$("#"+id).find(".top-box, .bot-box").addClass("undisplayed");
		}, 500);
	}
}

//baisse la div exppro d'en dessous pour découvrir le text
function toggleExppro(id)
{
	var noId = id.substr(-1, 1);
	var $triangleText = $('[data-link="' + id + '"]');
<<<<<<< HEAD

	if($triangleText.hasClass("triangle-text-show"+noId))
	{
		$triangleText.removeClass("triangle-text-show"+noId);
	}
	else
	{
		$triangleText.addClass("triangle-text-show"+noId);
	}

	nextId = parseInt(noId) + 1;
	nextExppro = "#exppro"+nextId;
	isLast = $(nextExppro).attr("data");
	if(isLast == "last")
	{
		$(nextExppro).removeClass("exppro-last");
	}
	else
	{
		$(nextExppro).addClass("exppro-last");
=======

	if($triangleText.hasClass("triangle-text-show"+noId))
	{
		$triangleText.removeClass("triangle-text-show"+noId);
	}
	else
	{
		$triangleText.addClass("triangle-text-show"+noId);
>>>>>>> origin/master
	}
}


function toggleButton(id)
{
	buttonClass = $("#"+id).attr("class");
	color = buttonClass.substr(buttonClass.length - 3);

	if(buttonClass.match("hvr"))
	{
		$("#"+id).removeClass("hvr-radial-out-"+color);
		$("#"+id).addClass("button-middle-active-"+color);
	}
	else
	{
		$("#"+id).addClass("hvr-radial-out-"+color);
		$("#"+id).removeClass("button-middle-active-"+color);
	}

}
