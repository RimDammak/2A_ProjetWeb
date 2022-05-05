<?php
include '../controller/reponseC.php';
include '../controller/mail.php';
$id=$_GET["id"];
$reponseC=new ReponseC();

if(

    isset($_POST['reponse'])
){
    $reponse = new Reponse($_POST['reponse'],$id);
    $reponseC->ajouterreponse($reponse);
   /* 
    $email='guetat1youssef@gmail.com';
    $email_content = array(
       'Subject' => 'Reclamation reccu',
       'body' => "Bonjour Mr/Mme Youssef,
       votre reclamation est bien recu,
       cordialement,
       EDUCAPLAY"
   );
   sendemail($email,$email_content);
   */
   header('Location: dashReclamation.php?temp=0');
}
else
{
echo 'el forum mazelll na9esss hooooooooooooooy';
}