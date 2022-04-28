<?php
include '../controller/reclamationC.php';
$ReclamationC=new ReclamationC();
$ReclamationC->supprimerreclamations($_GET["id"]);

header('Location: dashReclamation.php');
?>