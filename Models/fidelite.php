<?php
	class fidelite{
		private $ID_fidelite=null;
		private $libelle=null;
		private $seuil=null;
		private $created_at=null;
		private $update_at=null;
		private $is_reset=null;
        private $descrip=null;
		
		function __construct(){
			$ID_fidelite = -1;
			$libelle=null;
			$seuil=0.0;
			$now = new DateTime();
			$date= $now->format('Y-m-d H:i:s');
			$created_at=$date;
			$update_at=$date;
			$is_reset=30;
			$descrip="Default description";
			
	   
			$arguments = func_get_args();
		   $numberOfArguments = func_num_args();

		   if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
			   call_user_func_array(array($this, $function), $arguments);
			   }
	   }
		public function __construct8( $libelle, $seuil, $created_at, $update_at, $is_reset, $descrip){
			
			$this->libelle=$libelle;
			$this->seuil=$seuil;
			$this->created_at=$created_at;
			$this->is_reset=$is_reset;
			$this->descrip=$descrip;
		}
		function getID_fidelite(){
			return $this->getID_fidelite;
		}
		function getlibelle(){
			return $this->libelle;
		}
		function getseuil(){
			return $this->seuil;
		}
		function getCreated_at(){
			return $this->created_at;
		}
		function getUpdate_at(){
			return $this->update_at;
		}
		function getIs_reset(){
			return $this->is_reset;
		}
        function getDescrip(){
			return $this->descrip;
		}
		function setID_fidelite(string $ID_fidelite){
			$this->getID_fidelite=$ID_fidelite;
		}
		function setLibelle(string $libelle){
			$this->libelle=$libelle;
		}
		function setseuil(string $seuil){
			$this->seuil=$seuil;
		}
		function setCreated_at(string $created_at){
			$this->Created_at=$created_at;
		}
		function setUpdate_at(string $update_at){
			$this->update_at=$update_at;
		}
		function setIs_reset(string $is_reset){
			$this->is_reset=$is_reset;
		}
    
        function setDescrip(string $descrip){
			$this->descrip=$descrip;
		}
		
	}


?>