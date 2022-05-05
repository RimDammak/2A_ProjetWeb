<?php
include '../controller/commandeC.php';
include '../controller/mail.php';
$commandec=new CommandeC();


    $commande = new Commande("motaz","sammoud","motaz.sammoud@esprit.tn",$_GET['nom']);
    $commandec->ajoutercommande($commande);
   $email='motaz.sammoud@esprit.tn';
    $email_content = array(
       'Subject' => 'commande bien ajouter',
       'body' => "Bonjour Mr/Mme ,
       votre commande est bien ajouter,
       cordialement,
       EDUCAPLAY"
   );
   sendemail($email,$email_content);
   header('Location: commande.php');

