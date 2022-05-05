<?php
include_once('..\config.php');
include '..\model\produit.php';
class ProduitC {
    function afficherproduits(){
        $sql="SELECT * FROM produit";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
   
}
?>