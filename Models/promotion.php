<?php
	class promotion{
		private $ID_promotion;
		private $Nom=null;
		private $taux=null;
		private $created_at=null;
		private $update_at=null;
        private $nbr_jours=null;
        private $status;
        private $descrip=null;
		private $picture=null;
		
		function __construct(){
			 $ID_promotion = -1;
			 $Nom=null;
			 $taux=0.0;
			 $now = new DateTime();
			 $date= $now->format('Y-m-d H:i:s');
			 $created_at=$date;
			 $update_at=$date;
			 $nbr_jours=30;
			 $status=0;
			 $descrip="Default description";
			 $picture="";
		
			 $arguments = func_get_args();
        	$numberOfArguments = func_num_args();

        	if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
            	call_user_func_array(array($this, $function), $arguments);
       		 }
		}
		public function __construct8( $Nom, $taux, $created_at, $update_at, $status, $nbr_jours, $descrip, $picture){
		
			$this->Nom=$Nom;
			$this->taux=$taux;
			$this->created_at=$created_at;
			$this->update_at=$update_at;
			$this->status=$status;
			$this->nbr_jours=$nbr_jours;
			$this->descrip=$descrip;
			$this->picture=$picture;
		}
		function getID_promotion(){
			return $this->getID_promotion;
		}
		function getNom(){
			return $this->Nom;
		}
		function getTaux(){
			return $this->taux;
		}
		function getCreated_at(){
			return $this->created_at;
		}
		function getUpdate_at(){
			return $this->update_at;
		}
		function getNbrjours(){
			return $this->nbr_jours;
		}
        function getStatue(){
			return $this->status;
		}function getDescrip(){
			return $this->descrip;
		}
     	function getPicture(){
		return $this->picture;
     	}
        function setID_promotion($ID_promotion){
			$this->ID_promotion=$ID_promotion;
		}
		function setNom(string $nom){
			$this->nom=$nom;
		}
		function setTaux(string $taux){
			$this->taux=$taux;
		}
		function setCreated_at(string $created_at){
			$this->Created_at=$created_at;
		}
		function setUpdate_at(string $update_at){
			$this->update_at=$update_at;
		}
		function setNbr_jours(string $nbr_jours){
			$this->nbr_jours=$nbr_jours;
		}
        function setStatue(string $statue){
			$this->statue=$statue;
		}
        function setDescrip(string $descrip){
			$this->descrip=$descrip;
		}
		function setPicture(string $picture){
			$this->picture=$picture;
		}
		
	}


?>
