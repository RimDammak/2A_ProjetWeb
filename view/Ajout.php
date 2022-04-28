<?php
include '../controller/reclamationC.php';
include '../controller/mail.php';
$reclamationc=new ReclamationC();

if(

    isset($_POST['name'])&&isset($_POST['email'])
    &&isset($_POST['phone'])&&isset($_POST['subject'])
    &&isset($_POST['message'])
){
    $reclamation = new Reclamation($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['subject'],$_POST['message']);
    $reclamationc->ajouterreclamation($reclamation);
    
    $email='guetat1youssef@gmail.com';
    $email_content = array(
       'Subject' => 'Reclamation reccu',
       'body' => "Bonjour Mr/Mme Youssef,
       votre reclamation est bien recu,
       cordialement,
       EDUCAPLAY"
   );
   sendemail($email,$email_content);
   header('Location: contact-us.php');
}
else
{
echo 'el forum mazelll na9esss hooooooooooooooy';
}