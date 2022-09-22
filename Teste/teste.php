<?php  

	include_once "Automovel.php";
	include_once "Cambio.php";
	include_once "Manual.php";

	$cambio = new Cambio(5);
	$automovel = new Automovel(True, $cambio);

	$automovel->AumentarMarcha();

?>