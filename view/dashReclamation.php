<?php
include '../controller/reclamationc.php';
include '../controller/reponseC.php';



$reclamationC = new ReclamationC();
$reponseC = new ReponseC();
if($_GET["temp"]==1)
{
    $listeReclamationC = $reclamationC->trireclamations();
}
else if($_GET["temp"]==2)
{
$listeReclamationC = $reclamationC->searchreclamations($_POST["search"]);
}
else
{
    $listeReclamationC = $reclamationC->afficherreclamations();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboardyo.css">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="../Mainpage/indexa.php">
                        <span class="title">Site</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                <a href="">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">Reclamations</span>
                    </a>
                </li>
               

            </ul>
        </div>

        <!---- main -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!---- search -->
                <div class="search">
                    <label>
                        <form action="dashReclamation.php?temp=2" method="post">
                        <input type="text" name="search" placeholder="Chercher ici">
                        <button type="submit" class="btn">Recherche</button>
                        <ion-icon name="search-outline"></ion-icon>
                        </form>
                    </label>
                </div>
                <!---- mainImg -->
                <div class="user">
                    <img src="C:\Users\yassi\Desktop\Literally kol chay\Pics\034bd391dfa71378b23129858f3d71ba.jpg">
                </div>
            </div>

            <div class="details">
                <!---- Order list -->
                <div class="recentorders">
                    <div class="cardheader">
                        <h2>Demande recente</h2>
                        <a href="dashReclamation.php?temp=1" class="btn">Tri</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Nom</td>
                                <td>Email</td>
                                <td>Numero</td>
                                <td>Objet</td>
                                <td>Message</td>
                            </tr>
                        </thead>
                        <tbody>
                       
                            <?php
                            foreach ($listeReclamationC as $Reclamation) {
                            ?>
                                <tr>
                                    <td><?php echo $Reclamation['name']; ?></td>
                                    <td><?php echo $Reclamation['email']; ?></td>
                                    <td><?php echo $Reclamation['num_tel']; ?></td>
                                    <td><?php echo $Reclamation['objet']; ?></td>
                                    <td><?php echo $Reclamation['message']; ?></td>
                                    <td>
                                    <a href="supprimerReclamation.php?id=<?php echo $Reclamation['id']; ?>" class="btn">Supprimer</a>
                                    </td>
                                    <td>
                                    <a href="FormReponse.php?id=<?php echo $Reclamation['id']; ?>" class="btn">Reponse</a>
                                    </td>
                                   
                                </tr>
                               
                                <tr>
                                  <td></td>

                                  <td><h1>Reponses</h1></td>
                                  
                            <?php
                            $listeReponseC = $reponseC->afficherreponses($Reclamation['id']);
                            foreach ($listeReponseC as $Reponse) {
                            ?>
                                  <td><?php echo $Reponse['contenu_rep']; ?></td>
                                  <td>
                                  <a href="supprimerReponse.php?id=<?php echo $Reponse['id_rep']; ?>" class="btn">Supprimer</a>
                                  </td>
                                  <td>
                                  <a href="FormModifRep.php?id=<?php echo $Reponse['id_rep']; ?>" class="btn">Modifier</a>
                                  </td>
                                  <?php
                            }

                            ?>
                                </tr>
                            <?php
                            }

                            ?>
                        </tbody>
                    </table>
                </div>

            </div>






            <div class="details">
                <!---- Order list -->
                <div class="recentorders">
                    <div class="cardheader">
                        <h2>Charts</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <br><br>
                            </tr>
                            <tr>
                                <canvas id="bar-chart-horizontal" width="800" height="200"></canvas>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>














                 <script>
            new Chart(document.getElementById("bar-chart-horizontal"), {
                    type: 'horizontalBar',
                    data: {
                        labels: ["avec objet", "sans objet"],
                        datasets: [{
                            label: "Population (millions)",
                            backgroundColor: ["#3e95cd", "#8e5ea2"],
                            data: [<?php echo $reclamationC->count_objet();?>, <?php echo $reclamationC->count_nonobjet();?>]
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: 'Nombre des Utilisateurs'
                        }
                    }
                });
            </script>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



            
</body>

</html>