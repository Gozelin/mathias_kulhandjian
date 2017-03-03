<?php

include_once("../src/language.php");
session_start();
include("../src/token_giver.php");

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
				<h1 class="title-box">
					<?php echo MK ?>
				</h2>
				<h2 class="title-box">
					<?php echo DEVWEB ?>
				</h2>
				<h2 id="enter-box">
					<?php echo ENTER ?>
				</h2>
			</div>
		</div>
		<!-- CONTENT -->
		<div id="page-content">
			<!-- SIDE MENU -->
			<?php include("sidemenu.php") ?>
			<!-- PRESENTATION -->
			<div class="BG-home parallax band-box">
				<div class="full-band-left BG-light-green"></div>
				<div class="centered-box">
					<h1 class="title-box">
						<?php echo MK ?>
					</h1>
					<h2 class="title-box">
						<?php echo DEVWEB ?>
					</h2>
					<h2 class="title-box">
						<?php echo SKILLS ?>
					</h2>
				</div>
				<div class="text-box">
					<p>
						Curabitur non lacus dapibus, maximus erat et, suscipit leo. Fusce pulvinar vel felis eget iaculis. Sed condimentum libero at tortor porttitor, eu volutpat est convallis. Vivamus mattis nisi a dictum auctor. Nulla sed eros erat. Pellentesque ac lacus sed nulla hendrerit ornare. Donec fringilla elementum nulla sed scelerisque. Integer vel condimentum augue, at semper augue. Donec congue, turpis eu accumsan luctus, felis nisl consectetur dolor, eget ornare diam ante efficitur ex. Curabitur condimentum vulputate lectus. Etiam id consectetur leo, in imperdiet est. Vivamus rutrum lacus dolor, ut mollis turpis feugiat et. Phasellus auctor suscipit mauris, vel euismod sapien vulputate sit amet. Fusce mollis arcu vel dignissim vehicula.
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
					<div class="link-button">
						<a href="formation.php">
							<?php echo KNOW_MORE ?>
						</a>
					</div>
				</div>
				<div class="text-box">
					<p>
					Curabitur non lacus dapibus, maximus erat et, suscipit leo. Fusce pulvinar vel felis eget iaculis. Sed condimentum libero at tortor porttitor, eu volutpat est convallis. Vivamus mattis nisi a dictum auctor. Nulla sed eros erat. Pellentesque ac lacus sed nulla hendrerit ornare. Donec fringilla elementum nulla sed scelerisque. Integer vel condimentum augue, at semper augue. Donec congue, turpis eu accumsan luctus, felis nisl consectetur dolor, eget ornare diam ante efficitur ex. Curabitur condimentum vulputate lectus. Etiam id consectetur leo, in imperdiet est. Vivamus rutrum lacus dolor, ut mollis turpis feugiat et. Phasellus auctor suscipit mauris, vel euismod sapien vulputate sit amet. Fusce mollis arcu vel dignissim vehicula.
					</p>
				</div>
			</div>
			<!-- EXP PRO -->
			<div class="BG-exppro parallax band-box">
				<div class="full-band-left BG-darker-grey"></div>
				<div class="centered-box">
					<h1 class="title-box">
						<?php echo TITLE_EXPPRO ?>
					</h1>
					<div class="link-button">
						<a href="exppro.php">
							<?php echo KNOW_MORE ?>
						</a>
					</div>
				</div>
				<div class="text-box">
					<p>
					Curabitur non lacus dapibus, maximus erat et, suscipit leo. Fusce pulvinar vel felis eget iaculis. Sed condimentum libero at tortor porttitor, eu volutpat est convallis. Vivamus mattis nisi a dictum auctor. Nulla sed eros erat. Pellentesque ac lacus sed nulla hendrerit ornare. Donec fringilla elementum nulla sed scelerisque. Integer vel condimentum augue, at semper augue. Donec congue, turpis eu accumsan luctus, felis nisl consectetur dolor, eget ornare diam ante efficitur ex. Curabitur condimentum vulputate lectus. Etiam id consectetur leo, in imperdiet est. Vivamus rutrum lacus dolor, ut mollis turpis feugiat et. Phasellus auctor suscipit mauris, vel euismod sapien vulputate sit amet. Fusce mollis arcu vel dignissim vehicula.
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
					<div class="link-button">
						<a href="project.php">
							<?php echo KNOW_MORE ?>
						</a>
					</div>
				</div>
				<div class="text-box">
					<p>
					Curabitur non lacus dapibus, maximus erat et, suscipit leo. Fusce pulvinar vel felis eget iaculis. Sed condimentum libero at tortor porttitor, eu volutpat est convallis. Vivamus mattis nisi a dictum auctor. Nulla sed eros erat. Pellentesque ac lacus sed nulla hendrerit ornare. Donec fringilla elementum nulla sed scelerisque. Integer vel condimentum augue, at semper augue. Donec congue, turpis eu accumsan luctus, felis nisl consectetur dolor, eget ornare diam ante efficitur ex. Curabitur condimentum vulputate lectus. Etiam id consectetur leo, in imperdiet est. Vivamus rutrum lacus dolor, ut mollis turpis feugiat et. Phasellus auctor suscipit mauris, vel euismod sapien vulputate sit amet. Fusce mollis arcu vel dignissim vehicula.
					</p>
				</div>
			</div>
			<?php include("footer.php"); ?>
		</div>
	</body>
</html>

<script>
$(document).ready(function(){
	if(<?php echo $_SESSION["doors"] ?> == 1)
	{
		$("#door-frame").css({"display":"flex"})
	}
	else
	{
		$("#page-content").fadeIn(200, function(){});
	}
});

$("#enter-box").on("click", function() {
	$("#door-box").fadeOut(1000, function(){});
	$("#door-frame").fadeOut(800, function(){
		$("#page-content").fadeIn(200, function(){});
	});
	$("#door1").addClass("door1-open");
	$("#door2").addClass("door2-open");
});

</script>