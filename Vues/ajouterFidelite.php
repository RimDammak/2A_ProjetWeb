<?php
    include_once '../Models/fidelite.php';
    include_once '../Controllers/fideliteController.php';

    $error = "";

    // create fidelite
    $fidelite = null;

    // create an instance of the controller
    $fidelite = new fideliteController();
    if (
       	
		isset($_POST["libelle"]) &&		
        isset($_POST["seuil"]) &&
		isset($_POST["created_at"]) && 
        isset($_POST["update_at"]) && 
        isset($_POST["is_reset"])&&
        isset($_POST["descrip"])
    ) {
        var_dump($_POST);
        if (
    
      
		!empty($_POST["libelle"]) &&		
        !empty($_POST["seuil"]) &&
		!empty($_POST["created_at"]) && 
        !empty($_POST["update_at"]) && 
        !empty($_POST["is_reset"])&&
        !empty($_POST["descrip"])){
            $fidelite = new fidelite(
                
				$_POST['libelle'],
                $_POST['seuil'], 
				$_POST['created_at'],
                $_POST['update_at'],
                $_POST['is_reset'],
                $_POST['descrip'],
            );
            var_dump($fidelite);
            $fidelite->ajouterFidelite($promo);
            header('Location:afficherFidelite.php');
        }
        
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherListefidelite.php">Retour à la liste des fidelite</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
				<tr>
                    <td>
                        <label for="Nom">Libelle:
                        </label>
                    </td>
                    <td><input type="text" name="libelle" id="libelle" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="float">seuil:
                        </label>
                    </td>
                    <td><input type="float" name="seuil" id="seuil" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="date">created_at:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="created_at" id="created_at">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date">update_at:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="update_at" id="update_at">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="float">Is_reset:
                        </label>
                    </td>
                    <td>
                        <input type="float" name="is_reset" id="is_reset" >
                    </td>
                </tr>     
               
                <tr>
                    <td>
                        <label for="text">descrip:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="descrip" id="descrip" >
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>