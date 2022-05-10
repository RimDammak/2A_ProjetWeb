<?php
    include_once '../Models/promotion.php';
    include_once '../Controllers/promotionController.php';

    $error = "";

    // create promotion
    $promotion = null;

    // create an instance of the controller
    $promotion = new promotionController();
    if (
       
		isset($_POST["Nom"]) &&		
        isset($_POST["taux"]) &&
		isset($_POST["created_at"]) && 
        isset($_POST["update_at"]) && 
        isset($_POST["nbr_jours"])&&
        isset($_POST["statue"])&&
        isset($_POST["descrip"])
    ) {
        var_dump($_POST);
        if (
		!empty($_POST["Nom"]) &&		
        !empty($_POST["taux"]) &&
		!empty($_POST["created_at"]) && 
        !empty($_POST["update_at"]) && 
        !empty($_POST["nbr_jours"])&&
        !empty($_POST["descrip"])){
            $promo = new promotion(
				$_POST['Nom'],
                $_POST['taux'], 
				$_POST['created_at'],
                $_POST['update_at'],
                $_POST['statue'],
                $_POST['nbr_jours'],
                $_POST['descrip'],
            );
            var_dump($promo);
            $promotion->ajouterpromotion($promo);
            header('Location:afficher.php');
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
        <button><a href="afficherListepromotion.php">Retour à la liste des promotion</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
				<tr>
                    <td>
                        <label for="Nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="Nom" id="Nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="float">taux:
                        </label>
                    </td>
                    <td><input type="float" name="taux" id="taux" maxlength="20"></td>
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
                        <label for="float">nbr_jours:
                        </label>
                    </td>
                    <td>
                        <input type="float" name="nbr_jours" id="nbr_jours" >
                    </td>
                </tr>     
                <tr>
                    <td>
                        <label for="float">statue:
                        </label>
                    </td>
                    <td>
                        <input type="float" name="statue" id="statue" >
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
                    <td>
                        <label for="text">picture:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="picture" id="picture" >
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