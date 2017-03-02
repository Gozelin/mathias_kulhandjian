<?php

include_once("../src/language.php");

?>

<html>
	<head>
		<title>Mathias Kulhandjian</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/function.js"></script>
	</head>
	<body>
		<!-- DOORS -->
		<div id="door-frame">
			<!-- 1st door -->
			<div id="door1"></div>
			<!-- 2nd door -->
			<div id="door2"></div>
			<!-- TITLE -->
			<div id="door-box">
				<h1 class="title-box" class="door-text">
					<?php echo MK ?>
				</h2>
				<h2 class="title-box" class="door-text">
					<?php echo DEVWEB ?>
				</h2>
				<h2 id="enter-box" class="door-text">
					<?php echo ENTER ?>
				</h2>
			</div>
		</div>
		<!-- CONTENT -->
		<div id="page-content">
			<!-- SIDE MENU -->
			<?php include("sidemenu.php") ?>
			<!-- background -->
			<div ></div>
			<!-- PRESENTATION -->
			<div class="BG-home parallax band-box">
				<div class="full-band-left BG-light-green"></div>
				<div class="centered-box">
					<h1 class="title-box">
						<?php echo MK ?>
					</h1>
					<h2 class="title-box" class="door-text">
						<?php echo DEVWEB ?>
					</h2>
					<h2 class="title-box" class="door-text">
						<?php echo SKILLS ?>
					</h2>
				</div>
				<div class="text-box">
					<p>
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					</p>
				</div>
			</div>
			<!-- FORMATIONS -->
			<div class="BG-formation parallax band-box">
				<div class="full-band-right BG-dark-grey"></div>
				<div class="centered-box">
					<h1 class="title-box">
						<?php echo TITLE_FORMATION ?>
					</h1>
				</div>
				<div class="text-box">
					<p>
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					</p>
				</div>
			</div>
			<!-- EXP PRO -->
			<div class="BG-exppro parallax band-box">
				<div class="full-band-left BG-dark-grey"></div>
				<div class="centered-box">
					<h1 class="title-box">
						<?php echo TITLE_EXPPRO ?>
					</h1>
				</div>
				<div class="text-box">
					<p>
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					</p>
				</div>
			</div>
			<!-- PROJECT -->
			<div class="bg-project parallax band-box">
				<div class="full-band-right BG-dark-grey"></div>
				<div class="centered-box">
					<h1 class="title-box">
						<?php echo TITLE_PROJECT ?>
					</h1>
				</div>
				<div class="text-box">
					<p>
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					LOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUMLOREMIPSUM
					</p>
				</div>
			</div>
		</div>
	</body>
</html>

<script>

$("#enter-box").on("click", function() {
	$(".door-text").fadeOut(1000, function(){});
	$("#door-frame").fadeOut(800, function(){
		$("#page-content").fadeIn(200, function(){});
	});
	$("#door1").addClass("door1-open");
	$("#door2").addClass("door2-open");
});

</script>