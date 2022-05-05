<?php
include '../controller/commandeC.php';
$CommandeC=new CommandeC();
$CommandeC->supprimercommandes($_GET["id"]);

header('Location: dashCommande.php?temp=0');
?>