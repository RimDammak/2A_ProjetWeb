<?php
include '../controller/reponseC.php';
$id = $_GET["id"];
$reponseC=new ReponseC();
if(
    isset($_POST['reponse'])
    
){
    $reponse = new Reponse($_POST['reponse'],"");
    $reponseC->modifierreponses($id, $reponse);
}
else
echo 'erreur';
header("Location: dashReclamation.php?temp=0");
?>