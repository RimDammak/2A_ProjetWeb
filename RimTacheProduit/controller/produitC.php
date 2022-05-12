<?php
require_once "C:/xampp/htdocs/rimlamine/config.php";
include "C:/xampp\htdocs/rimlamine\model/produit.php"; 

class produitC{

    function afficherProduit()
    {
      $sql = " SELECT * FROM produit ORDER BY prix ASC";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }

    function listeCategorie()
    {
      $sql = " SELECT * FROM categorie";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }

    function listeFournisseur()
    {
      $sql = " SELECT * FROM fournisseur";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    
	
    function ajoutProduit($produit)
    {
        
       $sql = "INSERT INTO produit (Nomproduits, prix, description, categorie, img)
       values(:Nomproduits, :prix, :description, :categorie, :img)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'Nomproduits' => $produit->getNomproduits(),
	         	'prix' => $produit->getprix(),
            'description' => $produit->getDescription(),
	         	'categorie' => $produit->getCategorie(),
			'img' => $produit->getImg()
            
        ]);
        
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    function supprimerProduit($id){
			$sql="DELETE FROM produit WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
    function modifierProduit($produit, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET 
						Nomproduits = :Nomproduits, 
						prix = :prix,
						description = :description,
						categorie = :categorie,
						img = :img
					WHERE id = :id'
				);
				$query->execute([
					'Nomproduits' => $produit->getNomproduits(),
					'prix' => $produit->getprix(),
						 'description' => $produit->getDescription(),
					'categorie' => $produit->getCategorie(),
				    'id' => $id  , 
					'img' => $produit->getImg()
					 ]);

				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererProduit($id){
			$sql="SELECT * from produit where	id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$produit=$query->fetch();
				return $produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererProduit1($id){
			$sql="SELECT * from produit where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$produit = $query->fetch(PDO::FETCH_OBJ);
				return $produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recupererProduitParCategorie($categorie){
			$sql="SELECT * from produit where  categorie= $categorie";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$liste= $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

	 
	}

  