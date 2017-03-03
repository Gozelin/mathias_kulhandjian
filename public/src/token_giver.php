<?php

$time_expire = 30;

$token = uniqid(rand(), TRUE);

$_SESSION["doors"] = 1;

if(isset($_SESSION["token"]) && isset($_SESSION["token_time"]))
{
	$timestamp_ancien = new Datetime("now");

	$dateDiff = $_SESSION['token_time']->diff($timestamp_ancien);
	$dateDiffM = $dateDiff->format("%i");
	$dateDiffH = $dateDiff->format("%h");

	//si le token a plus de 30mn : retour à la page login sinon on refresh le token
	if(intval($dateDiffM) > $time_expire && intval($dateDiffH) < 1)
	{
		$_SESSION["doors"] = 1;
		$_SESSION['token_time'] = new DateTime("now");
	}
	else
	{
		$_SESSION["doors"] = 0;
		$_SESSION['token_time'] = new DateTime("now");
	}
}
else
{
	$_SESSION["doors"] = 1;
	$_SESSION['token'] = $token;
	$_SESSION['token_time'] = new DateTime("now");
}

?>