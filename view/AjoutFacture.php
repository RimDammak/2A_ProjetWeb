<?php
include '../controller/factureC.php';
include '../controller/mail.php';

include '../controller/produitC.php';

$produitC = new ProduitC();
$listeproduitC = $produitC->afficherproduits();
$factureC=new FactureC();
foreach ($listeproduitC as $produit) {
    if($produit["nom"] == $_GET['nom_p'])
    {
$prix=$produit["prix"];
    }}

    $facture = new Facture($_GET['nom_p'],$prix,$_GET['id']);
    $factureC->ajouterfactures($facture);
    
   
   header('Location: dashCommande.php');

