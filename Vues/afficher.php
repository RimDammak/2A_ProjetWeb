<?php
	include '../Controllers/promotionController.php';
	$promotion=new promotionController();
	$listepromotion=$promotion->afficherPromotion(); 
	
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterPromotion.php">Ajouter une promotion</a></button>
		<center><h1>Liste des promotion</h1></center>
		<table border="1" align="center">
			<tr>
				<th>ID_promotion</th>
				<th>Nom</th>
				<th>taux</th>
				<th>created_at</th>
				<th>update_at</th>
				<th>nbr_jours</th>
				<th>status</th>
                <th>descrip</th>
				<th>picture</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listepromotion as $promotion){
			?>
			<tr>
				<td><?php echo $promotion['id']; ?></td>
				<td><?php echo $promotion['nom']; ?></td>
				<td><?php echo $promotion['taux']; ?></td>
				<td><?php echo $promotion['create_at']; ?></td>
				<td><?php echo $promotion['update_at']; ?></td>
				<td><?php echo $promotion['nbr_jour']; ?></td>
                <td><?php echo $promotion['status']; ?></td>
                <td><?php echo $promotion['description']; ?></td>
				<td><?php echo $promotion['picture']; ?></td>
				<td>
					<form method="POST" action="modifier.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $promotion['id']; ?> name="id">
					</form>
				</td>
				<td>
					<a href="supprimer.php?id=<?php echo $promotion['id']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		
	</body>
</html>
