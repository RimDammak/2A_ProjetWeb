<?php
include '../controller/commandeC.php';
$id = $_GET["id"];
$commandeC=new CommandeC();
if(
    isset($_POST['nom'])&&isset($_POST['prenom']) &&isset($_POST['email']) &&isset($_POST['produit']) 
    
){
    $commande = new Commande($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['produit']);
    $commandeC->modifiercommandes($id, $commande);
}
else
echo 'erreur';
header("Location: dashCommande.php?temp=0");
?>