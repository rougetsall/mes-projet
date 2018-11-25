<?php
/* connexion et selection de base de donne */
include('connect.php');

$sql="select * from etudiant";

$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
$nb=mysql_num_rows($result);

?>

<table align='center' width='70%' border='1'>
<tr>
	<th>Prenom</th><th>Nom</th><th>Sexe</th><th>Login</th><th>Niveau</th><th>etat</th><th>Supprimer</th><th>Modifier</th>
</tr>
	<?php
	$i=0;
	do{
		if($i%2){
			echo "<tr bgcolor='gray'>";
		}else{
				echo "<tr bgcolor='yellow'>";
		}
	?>
		
			<td><?php echo $rows['prenom'];?></td>
			<td><?php echo $rows['nom'];?></td>
			<td><?php echo $rows['sexe'];?></td>
			<td><?php echo $rows['login'];?></td>
			<td><?php echo $rows['niveau'];?></td>
			<td><a href='activer_desactiver.php?id=<?php echo $rows['id_etudiant'];?>&etat=<?php echo $rows['etat'];?>'><?php if($rows['etat']){?>
			<img src='../img/activer.png' width="25">
				<?php } else{ ?>
				<img src='../img/desac.png' width="25"/>
				<?php }?></a></td>
			<td align='center'><a href='delete.php?id=<?php echo $rows['id_etudiant'];?>'><img src='../img/del.gif'></a></td>
			<td><a href='index.php?p=4&id=<?php echo $rows['id_etudiant'];?>'>Modifier</a></td>
		</tr>
	<?php
	$i++;
	}while($rows=mysql_fetch_array($result));
	?>
</table>
