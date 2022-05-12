<?PHP
	class produit
    {
		private  $id = null;
		private  $Nomproduits = null;
		
		private  $description = null;
		private  $prix = null;
		private    $categorie = null;	
		private  $img = null;	
		function __construct(string $Nomproduits, int $prix, string $description, int $categorie, string $img)
        {
			$this->Nomproduits=$Nomproduits;
			$this->description=$description;
			$this->prix=$prix;
			$this->categorie=$categorie;
			$this->img=$img;
		}
		function getId(): int{
			return $this->id;
		}
		function getImg(): string{
			return $this->img;
		}
		function getNomproduits(): string{
			return $this->Nomproduits;
		}
		function getDescription(): string{
			return $this->description;
		}
		function getprix(): int{
			return $this->prix;
		}
		function getCategorie(): int{
			return $this->categorie;
		}
		function setNomproduits(string $Nomproduits): void
        {
			$this->Nomproduits=$Nomproduits;
		}
		function setImg(string $img): void
        {
			$this->img=$img;
		}
		function setDescription(string $description): void
        {
			$this->description=$description;
		}
		function setprix(int $prix): void
        {
			$this->prix=$prix;
		}
		function setCategorie(int $categorie): void
        {
			$this->categorie=$categorie;
		}
		
    }
?>