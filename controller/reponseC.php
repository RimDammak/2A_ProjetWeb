<?php
include_once('..\config.php');
include '..\model\reponse.php';
class ReponseC {
    function afficherreponses($id){
        $sql="SELECT * FROM reponse  INNER JOIN reclamation ON reponse.id_rec = reclamation.id WHERE reclamation.id = $id";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimerreponses($id){
        $sql=" DELETE FROM reponse WHERE id_rep=:id";
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
    function ajouterreponse($reponses){

       $sql = "INSERT INTO reponse (contenu_rep,id_rec)
                 VALUES (:contenu_rep,:id_rec)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'contenu_rep'=> $reponses->getcontenu_rep(),
            'id_rec'=> $reponses->getid_rec(),
        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }
   function modifierreponses($id,$reponses){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE reponse SET contenu_rep = :contenu_rep WHERE id_rep= :id');
$query->execute([
    'contenu_rep'=> $reponses->getcontenu_rep(),
    'id'=> $id
]);
    } catch (Exception $e){
        $e->getMessage();
}}


function recupererreponses($id){
    $sql="SELECT * from reponse where id_rep=$id";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$reponses=$query->fetch();
return $reponses;
}catch (Exception $e){
    $e->getMessage();}
}

}
?>