<?PHP
	include_once "../../controller/produitC.php";

	$produitC=new produitC();
	
	if (isset($_POST["id"])){
		$produitC->supprimerProduit($_POST["id"]);
		header('Location:showProduit.php');
	}

?>