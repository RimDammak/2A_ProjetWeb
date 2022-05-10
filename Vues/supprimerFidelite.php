<?php
	include '../Controllers/fideliteController.php';
	$fidelite=new fideliteController();
	$fidelite->supprimerFidelite($_GET["id"]);
	header('Location:afficherFidelite.php');
?>