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
       
        if (
            
            !empty($_POST["libelle"]) &&		
            !empty($_POST["seuil"]) &&
            !empty($_POST["created_at"]) && 
            !empty($_POST["update_at"]) && 
            !empty($_POST["is_reset"])&& 
            !empty($_POST["descrip"])
        ) {
            $fidelite = new fidelite(
				$_POST['libelle'],
                $_POST['seuil'], 
				$_POST['created_at'],
                $_POST['update_at'],
                $_POST['is_reset'],
                $_POST['descrip'],
            );
            
            $fidelite->modifierFidelite($fidelite, $_POST["id_fidelite"]);
            header('Location:afficherFidelite.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de fidelite</title>
</head>
    <body>
        <button><a href="afficherFidelite.php">Retour à la liste des fidelite</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['id_fidelite'])){
				$old_fidelite= $fidelite->recupererFidelite($_POST['id_fidelite']);
                
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="ID_fidelite">Identifiant fidelite:
                        </label>
                    </td>
                    <td><input type="text" name="id_fidelite" id="id_fidelite" maxlength="20", value= <?php echo $old_fidelite['id_fidelite']; ?>></td>
                </tr>
				<tr>
                    <td>
                        <label for="Nom">Libelle:
                        </label>
                    </td>
                    <td><input type="text" name="libelle" id="libelle" maxlength="20", value= <?php echo $old_fidelite['libelle']; ?>></td>
                </tr>
                <tr>
                    <td>
                        <label for="float">seuil:
                        </label>
                    </td>
                    <td><input type="float" name="seuil" id="seuil" maxlength="20", value= <?php echo $old_fidelite['seuil']; ?>></td>
                </tr>
                <tr>
                    <td>
                        <label for="date">created_at:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="created_at" id="created_at", value= <?php echo $old_promotion['create_at']; ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date">update_at:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="update_at" id="update_at", value= <?php echo $old_promotion['update_at']; ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="float">Is_reset:
                        </label>
                    </td>
                    <td>
                        <input type="float" name="is_reset" id="is_reset", value= <?php echo $old_fidelite['is_reset']; ?> >
                    </td>
                </tr>     
                 
                <tr>
                    <td>
                        <label for="text">descrip:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="descrip" id="descrip" , value= <?php echo $old_promotion['description']; ?>>
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
		<?php
		}
		?>
    </body>
</html>