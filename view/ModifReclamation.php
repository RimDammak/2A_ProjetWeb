<?php
include '../controller/reclamationC.php';
$id = $_GET["id"];
$reclamationC=new ReclamationC();
if(
    isset($_POST['name'])&&isset($_POST['email'])
    &&isset($_POST['phone'])&&isset($_POST['subject'])
    &&isset($_POST['message'])
    
){
    $reclamation = new Reclamation($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['subject'],$_POST['message']);
    $reclamationC->modifierreclamations($id, $reclamation);
}
else
echo 'erreur';
header("Location: contact-us.php?temp=0");
?>