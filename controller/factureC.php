<?php
include_once('..\config.php');
include '..\model\facture.php';
class FactureC {
    function afficherfactures($id){
        $sql="SELECT * FROM facture  INNER JOIN commande ON facture.id_c = commande.id WHERE commande.id = $id";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimerfactures($id){
        $sql=" DELETE FROM facture WHERE id_f=:id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id' , $id);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function ajouterfactures($factures){

       $sql = "INSERT INTO facture (nom_p,prix,id_c)
                 VALUES (:nom_p,:prix,:id_c)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'nom_p'=> $factures->getnom_p(),
            'prix'=> $factures->getprix(),
            'id_c'=> $factures->getid_c(),
        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }
}
?>