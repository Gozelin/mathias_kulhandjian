<?php

	include_once("../src/language.php");

?>

<html>
	<head>
		<title>Mathias Kulhandjian</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
		<link rel="stylesheet" type="text/css" href="stylesheets/hover.css">
		<link rel="stylesheet" type="text/css" href="magic-master/magic.css">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="../src/function.js"></script>
	</head>
	<body class="over-x-hid">
		<?php include("sidemenu.php") ?>
		<div class="full-band BG-light-green">
			<div class="P-top-30">
			<h1 class="title-box">
				<?php echo TITLE_EXPPRO ?>
			</h1>
			</div>
		</div>
		<div id="exppro-content">
			<div id="exppro1" class="triangle-box">
					<div class="exppro-button">
						<div id="E-button1" class="triangle-title-right circle-base button-middle hvr-radial-out-ora">
							<label class="button-label"><?php echo EXPPRO1 ?></label>
						</div>
					</div>
				<div class=triangle>
					<svg viewBox="0 0 100 50">
	  					<polygon points="100 0, 100 50, 0 25"></polygon>
					</svg>
				</div>
			</div>
			<div class="triangle-text" data-link="exppro1">
				<h1>
					Curabitur non lacus dapibus, maximus erat et, suscipit leo. Fusce pulvinar vel felis eget iaculis. Sed condimentum libero at tortor porttitor, eu volutpat est convallis. Vivamus mattis nisi a dictum auctor. Nulla sed eros erat. Pellentesque ac lacus sed nulla hendrerit ornare. Donec fringilla elementum nulla sed scelerisque. Integer vel condimentum augue, at semper augue. Donec congue, turpis eu accumsan luctus, felis nisl consectetur dolor, eget ornare diam ante efficitur ex. Curabitur condimentum vulputate lectus. Etiam id consectetur leo, in imperdiet est. Vivamus rutrum lacus dolor, ut mollis turpis feugiat et. Phasellus auctor suscipit mauris, vel euismod sapien vulputate sit amet. Fusce mollis arcu vel dignissim vehicula.
				</h1>
			</div>
			<div id="exppro2" class="triangle-box">
					<div class="exppro-button">
						<div id="E-button2" class="triangle-title-left circle-base button-middle hvr-radial-out-ora">
							<label class="button-label"><?php echo EXPPRO2 ?></label>
						</div>
					</div>
				<div class=triangle>
					<svg viewBox="0 0 100 50">
	  					<polygon points="0 0, 0 50, 100 25"></polygon>
					</svg>
				</div>
			</div>
			<div class="triangle-text" data-link="exppro2">
				<h1>
					Curabitur non lacus dapibus, maximus erat et, suscipit leo. Fusce pulvinar vel felis eget iaculis. Sed condimentum libero at tortor porttitor, eu volutpat est convallis. Vivamus mattis nisi a dictum auctor. Nulla sed eros erat. Pellentesque ac lacus sed nulla hendrerit ornare. Donec fringilla elementum nulla sed scelerisque. Integer vel condimentum augue, at semper augue. Donec congue, turpis eu accumsan luctus, felis nisl consectetur dolor, eget ornare diam ante efficitur ex. Curabitur condimentum vulputate lectus. Etiam id consectetur leo, in imperdiet est. Vivamus rutrum lacus dolor, ut mollis turpis feugiat et. Phasellus auctor suscipit mauris, vel euismod sapien vulputate sit amet. Fusce mollis arcu vel dignissim vehicula.
				</h1>
			</div>
			<div id="exppro3" class="triangle-box">
					<div class="exppro-button">
						<div id="E-button3" class="triangle-title-right circle-base button-middle hvr-radial-out-ora">
							<label class="button-label"><?php echo EXPPRO1 ?></label>
						</div>
					</div>
				<div class=triangle>
					<svg viewBox="0 0 100 50">
	  					<polygon points="100 0, 100 50, 0 25"></polygon>
					</svg>
				</div>
			</div>
			<div class="triangle-text" data-link="exppro3">
				<h1>
					Curabitur non lacus dapibus, maximus erat et, suscipit leo. Fusce pulvinar vel felis eget iaculis. Sed condimentum libero at tortor porttitor, eu volutpat est convallis. Vivamus mattis nisi a dictum auctor. Nulla sed eros erat. Pellentesque ac lacus sed nulla hendrerit ornare. Donec fringilla elementum nulla sed scelerisque. Integer vel condimentum augue, at semper augue. Donec congue, turpis eu accumsan luctus, felis nisl consectetur dolor, eget ornare diam ante efficitur ex. Curabitur condimentum vulputate lectus. Etiam id consectetur leo, in imperdiet est. Vivamus rutrum lacus dolor, ut mollis turpis feugiat et. Phasellus auctor suscipit mauris, vel euismod sapien vulputate sit amet. Fusce mollis arcu vel dignissim vehicula.
				</h1>
			</div>
		</div>
	</body>
</html>

<script>
$(document).ready(function(){
	$(".button-middle").click(function(){
		toggleExppro($(this).parents(".triangle-box").attr('id'));
		toggleButton($(this).attr("id"));
	});

});

</script>