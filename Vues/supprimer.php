<?php
	include '../Controllers/promotionController.php';
	$promotion=new promotionController();
	$promotion->supprimerpromotion($_GET["id"]);
	header('Location:afficher.php');
?>