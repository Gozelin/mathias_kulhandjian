<?php

include_once("../src/language.php");

?>

<div id="sidemenu">
	<ul>
		<li class="tab" ><a href="home.php" class="menu-link"><div class="label-link"><?php echo HOME ?></div><img class="menu-icon" src="img/icons/home.svg" height="24" width="24"></a></li>
		<li class="tab" ><a href="formation.php" class="menu-link"><div class="label-link"><?php echo FORMATION ?></div><img class="menu-icon" src="img/icons/formation.svg" height="24" width="24"></a></li>
		<li class="tab" ><a href="exppro.php" class="menu-link"><div class="label-link"><?php echo EXPPRO ?></div><img class="menu-icon" src="img/icons/exppro.svg" height="24" width="24"></a></li>
		<li class="tab" ><a href="project.php" class="menu-link"><div class="label-link"><?php echo PROJECT ?></div><img class="menu-icon" src="img/icons/project.svg" height="24" width="24"></a></li>
	</ul>
</div>

<script>

$(".tab").hover(function(){
	var linkWidth;
	linkWidth = $(this).children(".menu-link").width();
	$(this).css({"transform": "translate("+(linkWidth-20)+"px, 0px)"});
}, function(){
	$(this).css({"transform": "translate(0px, 0px)"});
});

</script>