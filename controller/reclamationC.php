<?php
include_once('..\config.php');
include '..\model\reclamation.php';
class ReclamationC {
    function afficherreclamations(){
        $sql="SELECT * FROM reclamation";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimerreclamations($id){
        $sql=" DELETE FROM reclamation WHERE id=:id";
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
    function ajouterreclamation($reclamations){

       $sql = "INSERT INTO reclamation (name,email, num_tel,objet,message)
                 VALUES (:name,:email, :num_tel,:objet,:message)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'name'=> $reclamations->getname(),
            'email'=> $reclamations->getemail(),
            'num_tel'=> $reclamations->getnum_tel(),
            'objet'=> $reclamations->getobjet(),
            'message'=> $reclamations->getmessage(),
        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }
   function modifierreclamations($id,$reclamations){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE reclamation SET name = :name, email = :email, num_tel = :num_tel,objet = :objet,message = :message WHERE id= :id');
$query->execute([
    'name'=> $reclamations->getname(),
    'email'=> $reclamations->getemail(),
    'num_tel'=> $reclamations->getnum_tel(),
    'objet'=> $reclamations->getobjet(),
    'message'=> $reclamations->getmessage(),
    'id'=> $id
]);
    } catch (Exception $e){
        $e->getMessage();
}}


function recupererreclamations($id){
    $sql="SELECT * from reclamation where id=$id";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$reclamations=$query->fetch();
return $reclamations;
}catch (Exception $e){
    $e->getMessage();}
}
function trireclamations(){
    $sql="SELECT * FROM reclamation order by name";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur:' . $e->getMessage());
    }
}
function searchreclamations($string){
    $sql="SELECT * FROM reclamation WHERE name = '$string' or email = '$string'";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur:' . $e->getMessage());
    }
}
function count_objet(){

	$sql="SELECT count(id) FROM reclamation WHERE objet!='' " ;
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
function count_nonobjet(){

	$sql="SELECT count(id) FROM reclamation WHERE objet='' " ;
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