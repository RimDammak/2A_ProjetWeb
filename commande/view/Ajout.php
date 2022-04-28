<?php
include '../controller/commandeC.php';
include '../controller/mail.php';
$commandec=new CommandeC();

if(

    isset($_POST['nom'])&&isset($_POST['prenom'])
    &&isset($_POST['email'])&&isset($_POST['produit'])
){
    $commande = new Commande($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['produit']);
    $commandec->ajoutercommande($commande);
    
    $email='guetat1youssef@gmail.com';
    $email_content = array(
       'Subject' => 'commande bien ajouter',
       'body' => "Bonjour Mr/Mme ,
       votre commande est bien ajouter,
       cordialement,
       EDUCAPLAY"
   );
   sendemail($email,$email_content);
   header('Location: commande.php');
}
else
{
echo 'el forum mazelll na9esss hooooooooooooooy';
}