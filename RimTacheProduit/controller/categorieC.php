<?php
require_once '../../config.php';
include "../../model/categorie.php"; 

class categorieC{

    function afficherCategorie()
    {
      $sql = " SELECT * FROM categorie ";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
	function afficherElementCategorie($id_categorie)
    {
		$sql="SELECT * from categorie where	id_categorie=$id_categorie";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$categorie=$query->fetch(PDO::FETCH_OBJ);
			return $categorie;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
    }
   

    function ajoutCategorie($categorie)
    {
        
       $sql = "INSERT INTO categorie (Typeproduits)
       values(:Typeproduits)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'Typeproduits' => $categorie->getTypeproduits()  
        ]);
        
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    function supprimerCategorie($id_categorie){
			$sql="DELETE FROM categorie WHERE id_categorie= :id_categorie";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_categorie',$id_categorie);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierCategorie($Utilisateur, $id_categorie){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categorie SET 
						Typeproduits  = :Typeproduits 	

					WHERE id_categorie = :id_categorie'
				);
				$query->execute([
					'Typeproduits' => $Utilisateur->getTypeproduits(),
					'id_categorie' => $id_categorie
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererCategorie($id_categorie){
			$sql="SELECT * from categorie where	id_categorie=$id_categorie";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$categorie=$query->fetch();
				return $categorie;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererCategorie1($id_categorie){
			$sql="SELECT * from categorie where id_categorie=$id_categorie";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$categorie = $query->fetch(PDO::FETCH_OBJ);
				return $categorie;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

  