<?php
include '../controller/commandeC.php';
$id = $_GET["id"];
$commandeC=new CommandeC();

    $commande = new Commande("hechmi","amine","medamine.hechmi@esprit.tn",$_GET['nom']);
    $commandeC->modifiercommandes($id, $commande);


header("Location: commande.php?temp=0");
?>