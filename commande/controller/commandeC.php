<?php
include_once('..\config.php');
include '..\model\commande.php';
class CommandeC {
    function affichercommandes(){
        $sql="SELECT * FROM commande";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimercommandes($id){
        $sql=" DELETE FROM commande WHERE id=:id";
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
    function ajoutercommande($commandes){

       $sql = "INSERT INTO commande (nom,prenom, email,nom_c)
                 VALUES (:nom,:prenom, :email,:nom_c)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'nom'=> $commandes->getnom(),
            'prenom'=> $commandes->getprenom(),
            'email'=> $commandes->getemail(),
            'nom_c'=> $commandes->getnom_c(),
        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }
   function modifiercommandes($id,$commandes){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE commande SET nom = :nom, prenom = :prenom, email = :email,nom_c = :nom_c WHERE id= :id');
$query->execute([
    'nom'=> $commandes->getnom(),
    'prenom'=> $commandes->getprenom(),
    'email'=> $commandes->getemail(),
    'nom_c'=> $commandes->getnom_c(),
    'id'=> $id
]);
    } catch (Exception $e){
        $e->getMessage();
}}


function recuperercommandes($id){
    $sql="SELECT * from commande where id=$id";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$commandes=$query->fetch();
return $commandes;
}catch (Exception $e){
    $e->getMessage();}
}
function tricommandes(){
    $sql="SELECT * FROM commande order by prenom";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur:' . $e->getMessage());
    }
}
function searchcommandes($string){
    $sql="SELECT * FROM commande WHERE nom = '$string' or prenom = '$string'";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur:' . $e->getMessage());
    }
}

function count_produit(){

	$sql="SELECT count(id) FROM commande WHERE nom='youssef' " ;
    $db = config::getConnexion();
    try{
        $query = $db->query($sql);
        $query->execute();
   	    $prog_number =$query->fetchColumn();
        return $prog_number;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }   
}
function count_nonproduit(){

	$sql="SELECT count(id) FROM commande " ;
    $db = config::getConnexion();
    try{
        $query = $db->query($sql);
        $query->execute();
   	    $prog_number =$query->fetchColumn();
        return $prog_number;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }   
}
}
?>