<?php
include '../controller/reponseC.php';
$ReponseC=new ReponseC();
$ReponseC->supprimerreponses($_GET["id"]);

header('Location: dashReclamation.php?temp=0');
?>