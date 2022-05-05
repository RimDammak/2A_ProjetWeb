<?php
include '../controller/commandeC.php';
$id = $_GET["id"];
$commandeC=new CommandeC();

    $commande = new Commande("youssef","guetat","guetat1youssef@gmail.com",$_GET['nom']);
    $commandeC->modifiercommandes($id, $commande);


header("Location: commande.php?temp=0");
?>