<?PHP
	
	 require_once '../../controller/categorieC.php';
	 $error = "";
	 $categorie = null;
	$categorieC=new categorieC();
	
	if (isset($_POST["id_categorie"])){
		$categorieC->supprimerCategorie($_POST["id_categorie"]);	
			header('Location:showCategorie.php');
	}

?>