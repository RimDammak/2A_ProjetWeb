<?php
	include '../Config/conf.php';
	include_once '../Models/fidelite.php';
	class fideliteController {
		function afficherFidelite(){
			$sql="SELECT * FROM fidelites";
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
		function supprimerFidelite($ID_fidelite){
			$sql="DELETE FROM fidelites WHERE id_fidelite=:id_fidelite";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_fidelite', $id_fidelite);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterFidelite($fidelite){
			$sql="INSERT INTO fidelites ( libelle, seuil, created_at, update_at, is_reset, descrip) 
			VALUES (:libelle, :seuil, :created_at, :update_at, :is_reset, :descrip)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				
					
				$query->bindValue(':libelle',$fidelite->getlibelle(),PDO::PARAM_STR);
				$query->bindValue(':seuil',$fidelite->getseuil(),PDO::PARAM_STR);
				$query->bindValue(':created_at',$fidelite->getcreated_at(),PDO::PARAM_STR);
				$query->bindValue(':update_at',$fidelite->getupdate_at(),PDO::PARAM_STR);
				$query->bindValue(':is_reset',$fidelite->getis_reset(),PDO::PARAM_STR);
				$query->bindValue(':descrip',$fidelite->getdescrip(),PDO::PARAM_STR);
					$query->execute();	
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererfidelite($ID_fidelite){
			$sql="SELECT * from fidelites where id_fidelite=$id_fidelite";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$fidelite=$query->fetch();
				return $fidelite;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierfidelite($fidelite, $ID_fidelite){
				$db = config::getConnexion();
				$sql = 'UPDATE fidelite SET 
                       
					
						libelle= :libelle, 
						seuil= :seuil, 
						created_at= :created_at, 
						update_at= :update_at, 
						is_reset= :is_reset,
                        descrip= :descrip,
					WHERE id_fidelite=' .$id_fidelite.';';
				try{
				
					$q = $db->prepare($sql);
					$q->bindValue(':libelle',$fidelite->getlibelle(),PDO::PARAM_STR);
					$q->bindValue(':seuil',$fidelite->getseuil(),PDO::PARAM_STR);
					$q->bindValue(':created_at',$fidelite->getCreated_at(),PDO::PARAM_STR);
					$q->bindValue(':update_at',$fidelite->getUpdate_at(),PDO::PARAM_STR);
					$q->bindValue(':is_reset',$fidelite->getIs_reset(),PDO::PARAM_STR);
					$q->bindValue(':descrip',$fidelite->getDescrip(),PDO::PARAM_STR);
					
					
				$q->execute();
				echo $query->rowCount() . " records UPDATED successfully <br>";
			    } catch (PDOException $e) {
				die($e->getMessage());
			}
		}

	}
?>	

