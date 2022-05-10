<?php
	include '../Controllers/fideliteController.php';
	$fidelite=new fideliteController();
	$listefidelite=$fidelite->afficherFidelite(); 
	
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterFidelite.php">Ajouter une fidelite</a></button>
		<center><h1>Liste des fidelite</h1></center>
		<table border="1" align="center">
			<tr>
				<th>ID_fidelite</th>
				<th>libelle</th>
				<th>seuil</th>
				<th>created_at</th>
				<th>update_at</th>
				<th>is_reset</th>
                <th>descrip</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listefidelite as $fidelite){
			?>
			<tr>
				<td><?php echo $fidelite['id_fidelite']; ?></td>
				<td><?php echo $fidelite['libelle']; ?></td>
				<td><?php echo $fidelite['seuil']; ?></td>
				<td><?php echo $fidelite['create_at']; ?></td>
				<td><?php echo $fidelite['update_at']; ?></td>
				<td><?php echo $fidelite['is_reset']; ?></td>
                <td><?php echo $fidelite['description']; ?></td>
				<td>
					<form method="POST" action="modifier.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $fidelite['id']; ?> name="id">
					</form>
				</td>
				<td>
					<a href="supprimer.php?id=<?php echo $fidelite['id']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		
	</body>
</html>
