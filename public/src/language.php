<?php

$languepreferee = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);

switch ($languepreferee[0]) {
	case "fr":
	case "fr-FR":
		include("../pages/international/fr_FR.php");
		break;
	case "en-EN":
		include("../pages/international/en_EN.PHP");
		break;
	}

?>