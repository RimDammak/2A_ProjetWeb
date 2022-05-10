<?php
	include '../Config/conf.php';
	include_once '../Models/promotion.php';
	class promotionController {
		function afficherPromotion(){
			$sql="SELECT * FROM promotions";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute();
				
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
			$liste = $query->fetchAll();
			return $liste;

		}
		function supprimerPromotion($id){
			$sql="DELETE FROM promotions WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterPromotion($promotion){
			$sql='INSERT INTO promotions (Nom, Taux, create_at, update_at, nbr_jour, status, description, picture)
			 VALUES (:Nom, :Taux, :created_at, :update_at, :nbr_jour, :status, :descrip, :picture);';
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->bindValue(':Nom',$promotion->getNom(),PDO::PARAM_STR);
				$query->bindValue(':Taux',$promotion->getTaux(),PDO::PARAM_STR);
				$query->bindValue(':created_at',$promotion->getCreated_at(),PDO::PARAM_STR);
				$query->bindValue(':update_at',$promotion->getUpdate_at(),PDO::PARAM_STR);
				$query->bindValue(':nbr_jour',$promotion->getNbrjours(),PDO::PARAM_STR);
				$query->bindValue(':status',$promotion->getStatue(),PDO::PARAM_STR);
				$query->bindValue(':descrip',$promotion->getDescrip(),PDO::PARAM_STR);
				$query->bindValue(':picture',$promotion->getPicture(),PDO::PARAM_STR);

				$query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}		
		}
		function recupererPromotion($ID_promotion){
			$sql="SELECT * from promotions where id=$ID_promotion";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$promotion=$query->fetch();
				return $promotion;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierPromotion($promotion, $id){
				var_dump($promotion);
				
				$db = config::getConnexion();
				$sql = 'UPDATE promotions SET 
				nom= :Nom, 
				taux= :Taux,
				create_at= :created_at, 
				update_at= :update_at,
				nbr_jour= :nbr_jour,
				picture= :picture,
				status= :status,
				description= :descrip
				WHERE id='.$id.';';

				
			try{
				
				$q = $db->prepare($sql);
				$q->bindValue(':Nom',$promotion->getNom(),PDO::PARAM_STR);
				$q->bindValue(':Taux',$promotion->getTaux(),PDO::PARAM_STR);
				$q->bindValue(':created_at',$promotion->getCreated_at(),PDO::PARAM_STR);
				$q->bindValue(':update_at',$promotion->getUpdate_at(),PDO::PARAM_STR);
				$q->bindValue(':nbr_jour',$promotion->getNbrjours(),PDO::PARAM_STR);
				$q->bindValue(':status',$promotion->getStatue(),PDO::PARAM_STR);
				$q->bindValue(':descrip',$promotion->getDescrip(),PDO::PARAM_STR);
				$q->bindValue(':picture',$promotion->getPicture(),PDO::PARAM_STR);
				
				$q->execute();		
				
				echo $q->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				die($e->getMessage());
			}
		}

	}
?>