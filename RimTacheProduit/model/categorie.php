<?PHP
	class categorie
    {
		private $id_categorie= null;
		private  $Typeproduits = null;	
		function __construct( string $Typeproduits)
        {
			$this->Typeproduits=$Typeproduits;
            
		}
		function getId_Categorie(): int{
			return $this->id_categorie;
		}
		function getTypeproduits(): string{
			return $this->Typeproduits;
		}
		
		function setTypeproduits(string $Typeproduits): void
        {
			$this->Typeproduits=$Typeproduits;
		}
    }
?>