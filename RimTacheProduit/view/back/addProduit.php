<?php
   
   include_once '../../controller/produitC.php';

    $error = "";
    $produit = null;
    $produitC = new produitC(); 
    $produit1C = new produitC();
	$listeCategorie= $produit1C->listeCategorie();
    $produit2C = new produitC();
	$listeFournisseur= $produit2C->listeFournisseur();
 
  

    if( isset($_POST['Nomproduits']) 
        
        && isset($_POST['description']) 
        && isset($_POST['prix'])
         && isset($_POST["categorie"])
         && isset($_POST["fournisseur"])
         && isset($_POST["img"])
         ) 
         { 
            
             if( !empty($_POST['Nomproduits']) &&
             
             !empty($_POST['description']) &&
             !empty($_POST['prix']) &&
             !empty($_POST['categorie']) &&
             !empty($_POST["fournisseur"]) &&
             !empty($_POST["img"]) 
             )
                {
                $produit= new produit($_POST['Nomproduits'],$_POST['prix'],$_POST['description'],$_POST['categorie'] ,$_POST['fournisseur'],$_POST['img'] );
                $produitC->ajoutProduit($produit);
                header('Location:showProduit.php');
                }
           else 
               {
                   $error =" Missing information";
               } 
        
            }

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>Ajout produit</title>

	<!-- Fontfaces CSS-->
	<link href="css/font-face.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	<link href="vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="css/theme.css" rel="stylesheet" media="all">
    <script src="js/produit.js"></script>
</head>

<body class="animsition">
    <?php include "header.php" ?>
        <!-- END MENU SIDEBAR-->

		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- HEADER DESKTOP-->
			<header class="header-desktop">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="header-wrap">
							
							<div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">n</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>Vous avez n nouveaux messages</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="back/images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">Voir tous les messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">n</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>Vous avez 3 nouveaux Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">Voir tous les emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">n</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>Vous avez n nouvelles notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>vous avez une notification de mail</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="" alt="Rim Dammak" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Rim Dammak</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Rim Dammak </a>
                                                    </h5>
                                                    <span class="email">fadi.akrout@esprit.tn</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Compte</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Parametres</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="1.html"> <!--page officielle0-->
                                                    <i class="zmdi zmdi-power"></i>Se déconnecter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						
						<div class="row">
                            <div class="col-lg-9">
								<br>
                                <h2 class="title-1 m-b-25">Ajouter un nouveau produit</h2>
                                <div id="error">
                                    <?php echo $error; ?>
                                        </div>
                                        <div id="erreur"></div>
                                <form action="" method="POST" action="" name="produit" id="produit" method="POST" onclick=" return verifProduit();">
                  <table  align="center">
                 <tr> 
                    <td> <label for="Nomproduits">Nomproduits: </label>
                    </td> 
                </tr>
                 <tr>
                    <td><input type="text" name="Nomproduits" id="Nomproduits" required maxlength="20"></td>
                </tr>
                
                </tr>
                <tr>
                    <td> <label for="description">Description: </label>  </td> 
 
                </tr> 
                <tr>
                    <td><<textarea name="description" id="description" cols="30" rows="10"></textarea>></td>
                </tr>
                <tr>
                    <td>    <label for="prix">Prix: </label></td> 
                </tr> 
                <tr>
                    <td><input type="text" name="prix" id="prix"  required  maxlength="200"></td> 
                </tr>
                <tr>
                    <td>    <label for="categorie">Categorie: </label></td> 
                </tr> 
                <tr>
                <td>
                     <select name="categorie" id="categorie" required >
                     <option value="select" selected>Select</option>
                        
           <?php
           foreach($listeCategorie as $listeC){
           ?>
           <option value ='<?PHP echo $listeC['id_categorie']; ?>'><?PHP echo $listeC['Typeproduits']; ?> </option>
           <?php
           }
           ?>
                     </select>   
                </td> 
                </tr>
                <tr>
                    <td><label for="fournisseur">Fournisseur:</label></td> 
                </tr> 
                <tr>
                    <td>
                    <select name="fournisseur" id="fournisseur" required >
                     <option value="select" selected>Select</option>
                        
          <?php
          foreach($listeFournisseur as $fournisseurC){
           ?>
           <option value ='<?PHP echo $fournisseurC['id_fournisseur']; ?>'> <?PHP echo $fournisseurC['nom']; ?></option>
           <?php
          }
          ?>
          </select>   
                     
                    </td> 
                </tr>
                <tr>
                    <td>    <label for="img">Image Produit: </label></td> 
                </tr> 
                <tr>

                <td>
<form enctype="multipart/form-data" method="post" autocomplete="on" action="upload/">     

    <p> <input type="file" id="img" name="img"  required /></p>
    
 </form>
 </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td></td><td> <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <input type="submit" class="au-btn au-btn-icon au-btn--blue" value="Envoyer">
                                    <input type="reset" class="au-btn au-btn-icon au-btn--blue" value="Annuler">
                                </div>
                            </div>
                </div></td></tr>
                
                  </table>
        </form>                   
                            
   </div>
</div>
						
                 	<div class="row">
								<div class="col-md-12">
										<div class="copyright">
												<p>&copy; Copyright.Tous droits réservés. <a href="../view/front/1.html">BestCornerShop</a>.</p>
										</div>
								</div>
						</div>

					</div>
				</div>
			</div>
		
		<!-- END PAGE CONTAINER-->

	

	<!-- Jquery JS-->
	<script src="vendor/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JS-->
	<script src="vendor/bootstrap-4.1/popper.min.js"></script>
	<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
	<!-- Vendor JS       -->
	<script src="vendor/slick/slick.min.js">
	</script>
	<script src="vendor/wow/wow.min.js"></script>
	<script src="vendor/animsition/animsition.min.js"></script>
	<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
	</script>
	<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendor/counter-up/jquery.counterup.min.js">
	</script>
	<script src="vendor/circle-progress/circle-progress.min.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="vendor/chartjs/Chart.bundle.min.js"></script>
	<script src="vendor/select2/select2.min.js">
	</script>

	<!-- Main JS-->
	<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->






